<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Routing\Route;
use App\Models\User;


class HomeController extends Controller
{
    public function index(){
        if(Auth::check()){
            $usuario = User::all();
            return view('dashboard', compact('usuario'));
        } 
        return  view('auth.login');
    }
}
