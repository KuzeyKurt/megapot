<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function loginValidation()
    {
        return view('auth.login');
    }
}
