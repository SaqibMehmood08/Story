<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use Illuminate\Support\Arr;

use App\Models\User;
use Stripe\Error\Card;
// use  Cartalyst\Stripe\Stripe;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
class MoneySetupController extends Controller
{
 public function paymentStripe()
 {
 return view('paymentstripe');
 }
public function postPaymentStripe(Request $request)
 {
    dd($request->all());
    \Stripe\Stripe::setApiKey('sk_test_51MNA9cLS7EBVEIKnYW5s3uhwhaQm7RC1KZtiwbIZJzd0sDgkUz1ufHZbsEx3jIZ4IWpdV8wvMu3KJb34310WPLMJ000gnn4QGt'
);
    $account =  \Stripe\Account::create([

         “type” => “custom”,

         “country” => “US”,


        ]);
 }
}
