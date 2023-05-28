<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Discipline;

class DisciplineController extends Controller
{
    public function index()
{
    $disciplines = Discipline::all();
    $user = auth()->user();

    
    return view('authorized.disciplines', compact('disciplines','user'));
}
}
