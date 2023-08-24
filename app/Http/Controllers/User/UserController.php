<?php


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
        if(Auth::check()){
            $usuarix = User::with('area')->get();
            return view('User.listar', compact('usuarix'));
        }
        return  view('auth.login');
    }


}
