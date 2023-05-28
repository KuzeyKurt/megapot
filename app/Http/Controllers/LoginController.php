<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserTest;
use App\Models\User;
use App\Models\Model;

class LoginController extends Controller
{
    function create()
    {
        return view('auth.login');
    }

    function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if (Auth::attempt($request->only('email', 'password')))
        {
            return redirect()->route('profile-page');
        }

        return back();
    }
}
