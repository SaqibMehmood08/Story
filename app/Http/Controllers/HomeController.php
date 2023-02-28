<?php

namespace App\Http\Controllers;

use App\Event\UserCreated;
use Illuminate\Http\Request;

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
        return view('home');
    }


    public function AuthUser()
    {
event(new UserCreated('Email has been send to you'));
return "Hitt";
    }
}
