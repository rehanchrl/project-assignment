<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $userRole = Auth::user()->role;
            return redirect()->route($userRole) ;
        }
    }

    public function getRegister()
    {
        return view('login.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'role' => 'Engineer',
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        //User Login
        Auth::loginUsingId($user->id);

        return redirect()->route($user->role);
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
