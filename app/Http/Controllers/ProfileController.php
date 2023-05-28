<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function profilePage()
   {
      $user = auth()->user();

    return view('authorized.profile-page', compact('user'));
   }
}
