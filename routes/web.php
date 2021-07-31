<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HuntController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);

Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

//old code  'HomeController@index'
Route::get('/', [HomeController::class, 'index']);

Route::get('register', [RegistrationController::class, 'store']);
// Route::post('register', 'RegistrationController@store');


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,"login"]);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// Route::get('/login',"LoginController@index")->name('login');
// Route::post('login',"LoginController@login");
// Route::get('/logout','LoginController@logout')->name('logout');
// Route::get('/home', function () {
//     return view('home');
// })->middleware('auth');
// Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/home',[HomeController::class,'index'])->name('logout')->middleware('auth');
// Route::get('/google_redirect', 'LoginController@redirectToProvider')->name('google.login');
// Route::get('/google_callback', 'LoginController@handleProviderCallback')->name('google.login.callback');


// Route::resource('user', 'UserController');
// Route::resource('hunt', 'HuntController');
Route::post('hunt',[HuntController::class,"store"]);
Route::get('huntDetails/{id}',[HuntController::class,"huntDetails"]);