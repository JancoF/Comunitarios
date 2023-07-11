<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function payment(request $request)
    {
        // dd($request->precio);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route("paypal_succes"),
                "cancel_url" => route("paypal_cancel")
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->precio
                    ]
                ]
            ]
        ]);
        //dd($response);
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['link'] as $link) {
                if ($link['rel'] == 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }  else {
            return redirect()->route('paypal_cancel');
        }
    }
    public function succes(request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response =  $provider->capturePaymentOrder($request->token);

        //dd($response);
        if(isset($request['status']) && $response['status'] == 'CPMPLETED'){
            return "Payment is succesful completado";
        } else{
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel()
    {
        return "Payment is cancel xd";
    }

}
