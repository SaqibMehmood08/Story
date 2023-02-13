<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TestController extends Controller
{
   public $privateVar=333;
// public function test()
// {
//     return view('amTesting');
// }
public function dashboard(){
    return App::make('private_var');
//    return  $this->getPrivateVar();

}
public function getPrivateVar()
{
    return $this->privateVar;
}

public function __construct()
{
$this->privateVar=22;

}



}
