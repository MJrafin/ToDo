<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::view('Reg_form','Reg_form');  // Route to view the Registration form
Route::post('registration',[UserController::class,'registration']);  //gets data from the registration form and saves the data in the table

Route::view('Login_form','Login_form');  // Route to view the Login form
Route::post('login',[UserController::class,'login']);  //gets data from the registration form and saves the data in the table

Route::get('Logout', function(){
    if (session()->has('email')) {

        session()->pull('email');
    }
    return redirect('/');
});

Route::view('Home','home');