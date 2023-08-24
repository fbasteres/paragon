<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use illuminate\Support\Facades\Auth;



class LogoutController extends Controller
{
    public function logout() {
        session::flush();

        Auth::logout();

        return redirect()->to('/login');
    }
}
