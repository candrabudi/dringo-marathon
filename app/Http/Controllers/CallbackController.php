<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use DB;
use Validator;

class CallbackController extends Controller
{
    public function receiveXenditInvoiceCallback(Request $request)
    {
        try {
            $callback_token = $request->header('x-callback-token');
            if ($callback_token != env('XENDIT_CALLBACK_KEY')) {
                return response()->json([
                    'status' => false,
                    'code' => 401,
                ], 200);
            }

            $validateData = $request->validate([
                'id' => 'required|string',
                'status' => 'required|string',
            ]);

            if ($request->request->get('external_id') != "") {
                $checkExternalId = strpos($request->request->get('external_id'), "KOMTIM");
                if ($checkExternalId !== false) {
                    //curl to new callback goes here
                    $response = $this->curlToNewInvoiceCallback($request);
                    return response()->json([
                        'status' => true,
                        'code' => $response->status,
                        'message' => $response->content,
                    ], $response->status);
                }
            }

            $status = $validateData['status'];
            $invoice = Invoice::where('invoice_xendit_id', $validateData['id'])->first();

            if ($invoice != null) {
                if($status == "PAID"){
                    Invoice::where('invoice_xendit_id', $validateData['id'])->update([
                        'is_paid' => 1,
                        'status' => 1
                    ]);
                }else if($status == "EXPIRED"){
                    Invoice::where('invoice_xendit_id', $validateData['id'])->update([
                        'is_paid' => 0,
                        'status' => 2
                    ]);
                }else{
                    return response()->json([
                        'status' => false,
                        'code' => 200,
                    ], 200);
                }
                return response()->json([
                    'status' => true,
                    'code' => 200,
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'code' => 200,
                ], 200);
            }

            return response()->json([
                'status' => true,
                'code' => 200,
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => false,
                'code' => 200,
                'message' => $e->getMessage(),
            ], 200);
        }
    }
}
