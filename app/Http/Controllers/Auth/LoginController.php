<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class LoginController extends Controller
{
    public function registerView()
    {
        return view('frontend.register');
    }

    public function registerAction(Request $request){
        $password = $request->post('password');//Hash::make($request->post('password'));
        $user = [
            'name' => $request->post('firstname')." ".$request->post('firstname'),
            'email' => $request->post('email'),
            'password' => $password
        ];
        if (User::create($user)){
            return redirect(route('login'))->with('msg','You\'re registered successfully');
        }

    }

    public function loginView()
    {
        return view('frontend.login');
    }

    public function loginAction(Request $request){
        $password = $request->post('password');
        $email = $request->post('email');

        $user = User::where('email','=',$email)->where('password','=',$password)->first();

        if ($user){
            echo "logged in";
            Auth::login($user);
//            dd();
            return redirect(route('dashboard'))->with('msg','Welcome! Successfully Logged in');
        }else
            return redirect()->back(301);

    }

    public function logoutAction(){
        Auth::logout();
        return redirect(route('login'))->with('error-msg',"Login to continue");
    }
}
