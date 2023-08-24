<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        if(Auth::check()){
            $users = User::all();
            return redirect('/home');
        }
        return view('auth.login');
    }
    
    public function register(RegisterRequest $request)
    {
            $users = User::create($request->validated());
    }
}

?>
