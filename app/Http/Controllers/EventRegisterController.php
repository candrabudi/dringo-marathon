<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Alert;
use App\Models\Invoice;
use App\Models\Participant;
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

            $apiURL = 'https://api.xendit.co/v2/invoices';
                    
            $postInput = [
                    "external_id" => "invoice-".time(),
                    "amount" => 155000,
                    "payer_email" => $request->email,
                    "description" => "Invoice Dringo Marathon Atas Nama ".$request->name
            ];

            $headers = [
                'Authorization' => "Basic ".env('XENDIT_API_KEY')
            ];

            $response = Http::withHeaders($headers)->post($apiURL, $postInput);

            $statusCode = $response->status();
            if($statusCode != 200){
                Alert::error('Yah', 'Maaf ada kesalahan, Tidak Bisa Membuat Invoice');
                return redirect()
                ->back()
                ->withInput();
            }
            $responseBody = json_decode($response->getBody(), true);

            $register = new Participant();
            $register->nik = $request->nik;
            $register->name = $request->name;
            $register->email = $request->email;
            $register->birth_place = $request->birth_place;
            $register->birth_date = $request->birth_date;
            $register->address = $request->address;
            $register->save();
            $register->fresh();
            
            $invoice = new Invoice();
            $invoice->participant_id = $register->id;
            $invoice->invoice_xendit_url = $responseBody['invoice_url'];
            $invoice->invoice_xendit_id = $responseBody['id'];
            $invoice->invoice_event_id = $responseBody['external_id'];
            $invoice->title = "Invoice Dringo Marathon Atas Nama ".$request->name;
            $invoice->amount = "155000";
            $invoice->save();
            Alert::error('Hore', 'Kamu Sudah Mendaftar Dringo Marathon!');
            return redirect()->to($responseBody['invoice_url']);
        }catch(\Exception $e){
            DB::rollback();
            Alert::error('Yah', 'Maaf ada kesalahan internal '.$e->getMessage());
            return redirect()
            ->back()
            ->withInput();
        }
    }
}
