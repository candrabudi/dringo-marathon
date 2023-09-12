<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Alert;
use App\Models\Invoice;
use App\Models\Participant;
use App\Models\User;
use App\Models\UserDetail;
use Validator;
use DB;

class EventRegisterController extends Controller
{
    public function index()
    {
       

        return view('index');
    }

    public function register(Request $request)
    {
        try{
            $rules = [
                'nik' => 'required',
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'birth_place' => 'required',
                'birth_date' => 'required',
                'address' => 'required',
            ];
    
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                Alert::error('Yah', 'Mohon check kembali inputan kamu. '.$validator->errors());
                return redirect()->back()
                    ->withInput()
                    ->withErrors($validator->errors());
            }

            $user = new User();
            $user->name = $request->name;
            $user->email =$request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            $user->fresh();

            $user_detail = new UserDetail();
            $user_detail->user_id = $user->id;
            $user_detail->nik = $request->nik;
            $user_detail->birth_date = $request->birth_date;
            $user_detail->birth_place = $request->birth_place;
            $user_detail->address = $request->address;
            $user_detail->category = $request->category; 
            $user_detail->save();

            Alert::success('Hore', 'Kamu Sudah Mendaftar Dringo Marathon!');
            return redirect()->route('login');

        }catch(\Exception $e){
            DB::rollback();
            Alert::error('Yah', 'Maaf ada kesalahan internal '.$e->getMessage());
            return redirect()
            ->back()
            ->withInput();
        }
    }
}
