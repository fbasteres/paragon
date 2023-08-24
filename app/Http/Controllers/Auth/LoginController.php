<?php

namespace App\Http\Controllers\auth;
use App\Http\Requests\LoginRequest;
use Illuminate\http\Request;
use App\Http\Controllers\controller;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return  view('auth.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('Usuario y/o contraseña incorrectos');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);

    }

    public function authenticated(Request $request, $user){
        return redirect('/home');
    }

}
