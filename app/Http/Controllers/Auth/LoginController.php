<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function registerView()
    {
        return view('frontend.register');
    }

    public function registerAction(Request $request){
        dd($request->post());
    }

    public function loginView()
    {
        return view('frontend.login');
    }

    public function loginAction(Request $request){
        dd($request->post());

    }
}
