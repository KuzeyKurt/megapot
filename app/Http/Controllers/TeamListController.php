<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamListController extends Controller
{
    public function teamList()
    {
        $teams = Team::all();
        $user = auth()->user();

        return view('authorized.teams', compact('teams', 'user'));
    }
}
