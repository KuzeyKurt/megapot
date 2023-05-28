<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Tournment;

class TournmentProfile extends Controller
{
    public function tournmentList()
    {
        $tournments = Tournment::all();
        $user = auth()->user();

    return view('authorized.tournments', compact('tournments', 'user'));
    }
}
