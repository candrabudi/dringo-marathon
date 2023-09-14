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
        DB::beginTransaction();
        try {
            $rules = [
                'nik' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'birth_place' => 'required',
                'birth_date' => 'required|date',
                'address' => 'required',
                'phone_number' => 'required',
                'gender' => 'required',
                'category' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors($validator->errors());
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            $user->userDetail()->create([
                'phone_number' => $request->phone_number,
                'gender' => $request->gender,
                'nik' => $request->nik,
                'birth_date' => $request->birth_date,
                'birth_place' => $request->birth_place,
                'address' => $request->address,
                'category' => $request->category,
                'blood_group' => $request->blood_group,
                'illness_history' => $request->illness_history,
            ]);
            DB::commit();
            Alert::success('Hore', 'Kamu Sudah Mendaftar Dringo Marathon!');
            return redirect()->route('login');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e->getMessage());
            Alert::error('Yah', 'Maaf ada kesalahan internal ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
