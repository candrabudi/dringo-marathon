<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use DB;
use PDF;
use Alert;
use App\Models\UserDetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $check_invoice = Invoice::where('user_id', Auth::user()->id)
            ->first();

        return view('home', compact(
            'check_invoice'
        ));
    }

    public function createInvoice(Request $request)
    {
        DB::beginTransaction();
        try{
            $user = Auth::user();
            $check_invoice = Invoice::where('user_id', $user->id)
                ->first();
            if($check_invoice){
                Alert::error('Yah', 'Maaf invoice sudah terbuat');
                return redirect()->back();
            }
            $apiURL = 'https://api.xendit.co/v2/invoices';
            $user_detail = UserDetail::where('user_id', $user->id)
                ->first();
                
            $price = $user_detail->category == "Pelajar" ? 100000 : 150000;

            $postInput = [
                    "external_id" => "invoice-".time(),
                    "amount" => $price,
                    "payer_email" => $user->email,
                    "description" => "Invoice Dringo Marathon Atas Nama ".$user->name
            ];

            $headers = [
                'Authorization' => "Basic ".env('XENDIT_API_KEY')
            ];

            $response = Http::withHeaders($headers)->post($apiURL, $postInput);

            $statusCode = $response->status();
            if($statusCode != 200){
                $responseBody = json_decode($response->getBody(), true);
                return $responseBody;
                Alert::error('Yah', 'Maaf ada kesalahan, Tidak Bisa Membuat Invoice');
                return redirect()
                ->back()
                ->withInput();
            }

            $responseBody = json_decode($response->getBody(), true);
            $invoice = new Invoice();
            $invoice->user_id = $user->id;
            $invoice->invoice_xendit_url = $responseBody['invoice_url'];
            $invoice->invoice_xendit_id = $responseBody['id'];
            $invoice->invoice_event_id = $responseBody['external_id'];
            $invoice->title = "Invoice Dringo Marathon Atas Nama ".$request->name;
            $invoice->amount = $price;
            $invoice->save();

            DB::commit();
            // return redirect()->to($responseBody['invoice_url']);
            return redirect()->back();
        }catch(\Exception $e){
            DB::rollback();
            Alert::error('Yah', 'Maaf ada kesalahan internal '.$e->getMessage());
            return redirect()
            ->back()
            ->withInput();
        }
    }

    public function downloadInvoice()
    {
        $user = Auth::user();
        $check_invoice = Invoice::where('user_id', $user->id)
            ->first();
        if(!$check_invoice){
            return redirect()->route('home');
        }
        $data = [
            'user' => $user,
            'check_invoice' => $check_invoice,
        ];
        $pdf = PDF::loadView('pdf.invoice', $data, [
            'format' => 'A4', 
            'orientation' => 'portrait',
            'dpi' => 150,
            'margin_left' => 10, 
            'margin_right' => 10, 
            'margin_top' => 10, 
            'margin_bottom' => 10,
            'margin_header' => 0,
            'margin_footer' => 0,
            'width' => 210,
            'height' => 297,
        ]);
    
        return $pdf->download('invoice_'.$user->name.'.pdf');
    }
}
