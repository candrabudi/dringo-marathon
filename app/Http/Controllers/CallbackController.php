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
                //check if external_id contains KOMTIM prefix
                //which is KOMTIM prefix used to be new Invoice External ID format
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
            $invoice = Invoice::where('invoice_xendit_id', $validateData['id'])->firstorFail();

            if ($invoice != null) {
                switch ($status) {
                    case "PAID":
                        $invoice->status = 2;
                        $invoice->is_paid = true;
                        $invoice->save();
                        break;
                    case "EXPIRED":
                        if ($invoice->status != 2) {
                            $invoice->status = 3;
                            $invoice->save();
                        }
                        break;
                    default:
                        break;
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
