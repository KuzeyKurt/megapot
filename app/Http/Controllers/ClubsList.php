<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Venue;

class ClubsList extends Controller
{
    public function clubsList()
    {
        $user = auth()->user();
        $venues = Venue::all();
        return view('authorized.venues', compact('venues', 'user'));
    }
}
