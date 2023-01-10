<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;

class StripeController extends Controller
{
    public function index(Request $request){
      //    dd($request->all());
        $amount = rand(10,999);
        \Stripe\Stripe::setApiKey('sk_test_51MNA9cLS7EBVEIKnYW5s3uhwhaQm7RC1KZtiwbIZJzd0sDgkUz1ufHZbsEx3jIZ4IWpdV8wvMu3KJb34310WPLMJ000gnn4QGt');

        $intent = \Stripe\PaymentIntent::create([
              'amount' => ($amount)*100,
              'currency' => 'INR',
              'metadata' => ['integration_check'=>'accept_a_payment']
        ]);

        $data = array(
             'name'=> 'Saqib',
             'email'=> 'inft212101008@gmail.com',
             'amount'=> $amount,
             'client_secret'=> $intent->client_secret,
        );

       return view('stripe',['data'=>$data]);

      }

      public function success(){
       return view('success');
      }
}
