<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController; // нужно указать путь на каждый контроллер, чтобы он заработал 
use App\Http\Controllers\AutentificationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TournmentProfile;
use App\Http\Controllers\ClubsList;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Тут мы создаем роуты, то есть маршруты для страниц

Route::get('/', function () {
    return view('welcome');
});

Route::get('pageone', [MyPlaceController::class, 'index'])->name('index'); // временно, проверить, как меня редиректит на страницу page-one 


Route::get('registration', [RegisterController::class, 'registerGet'])->middleware('guest')->name('register');
Route::post('registration', [RegisterController::class, 'registerPost'])->middleware('guest');

// Route::get('registration', 'RegisterController@registerGet')->middleware('guest')->name('register');
// Route::post('registration', 'RegisterController@registerPost')->middleware('guest');


Route::get('login', [LoginController::class, 'loginValidation']);

Route::get('landing-page', [LandingController::class, 'landingShow'])->name('landing');

// Route::view('profile-page', [ProfileController::class, 'profile-page'])->middleware('auth')->name('profile-page');
Route::get('/profile-page', [ProfileController::class, 'profilePage'])->middleware('auth')->name('profile-page');
// Route::get('/profile-page', profilePage())->middleware('auth')->name('profile-page');


Route::get('tournments', [TournmentProfile::class, 'tournmentList']);

Route::get('clubs', [ClubsList::class, 'clubsList']);



// Route::get('page-auth', function()
// {
//     return 'Authorization/Autentification page';
// });

// Route::get('page-login', function()
// {
//     return 'This log in page';
// });

// Route::get('landing-page', function()
// {
//     return 'Landing page of Megapot';
// }
// );

// Route::get('profile-page', function()
// {
//     return 'Page of profile of every user';
// });

// Route::get('page-tournment', function()
// {
//     return 'Page, where you can pick up the tournment';
// }
// );

// Route::get('city-clubs', function()
// {
//     return 'Тут вы можете посмотреть на карте компьютерные заведения своего города.
//     There you can view cumputer clubs of your city on map.';
// });