<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

  

    $customer = Stripe\Customer::create(array(

            "address" => [

                    "line1" => "Rajesh Tower",

                    "postal_code" => "123456",

                    "city" => "Vadodara",

                    "state" => "Gujrat",

                    "country" => "India",

                ],

            "email" => "test@gmail.com",

            "name" => "Vibhor Barnwal",

            "source" => $request->stripeToken

         ));

  

    Stripe\Charge::create ([

            "amount" => 10 * 10,

            "currency" => "rs",

            "customer" => $customer->id,

            "description" => "Test payment.",

            "shipping" => [

              "name" => "Vibhor",

              "address" => [

                "line1" => "Rajesh Tower",

                "postal_code" => "123456",

                "city" => "Vadodara",

                "state" => "Gujrat",

                "country" => "India",

              ],

            ]

    ]); 

    Session::flash('success', 'Payment successful!');

    return back();

    }
}
