<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login.login');
    }

    public function postLogin(Request $request)
    {
        dd('login success');
    }

    public function getRegister()
    {
        return view('login.register');
    }

    public function postRegister(Request $request)
    {
        dd('regist success');
    }
}
