<?php

namespace App\Http\Controllers;
use \App\Models\Applicant;

use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function index()
    {
        $sponsors = Applicant::all();

        return view('authorized.sponsors', compact('sponsors'));
    }
}
