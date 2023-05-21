<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserTest;
use App\Models\User;
use App\Models\Model;

class RegisterController extends Controller
{
    public function registerGet()
    {
        return view('auth.register'); // при регистрации получаем, GET-запрос
    }

    public function registerPost(Request $request) // что выводим после регистрации, поэтому и метод POST-запрос
    {
      
      $user = UserTest::create(array(
        // 'user_id' => '1',
        'name' => $request->name,
        'email' => $request->email,
        'nickname' => $request->nickname,
        'date' => $request->birthday,
        'password' => $request->password
      ));

      Auth::login($user);
      return redirect('/profile-page');
    }

   
}
