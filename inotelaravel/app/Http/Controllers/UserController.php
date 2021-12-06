<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class UserController extends Controller
{
    public function showFormLogin()
    {
        return view("frontend.auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->only("email", "password");
        if (Auth::attempt($data)) {
            return redirect()->route("notes.index");
        }else {
            dd("Login fail");
        }
    }

    public function logout()
    {
        \Illuminate\Support\Facades\Session::flush();
        Auth::logout();
        return redirect()->route("auth.login");
    }
}
