<?php

use App\Http\Controllers\LawyerAuthController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home','home');
Route::view('/homePage','index');
Route::view('login', 'lawyerlogin')->name('login');
Route::view('firmlogin', 'firmlogin');
Route::view('register','lawyerregister')->name('register');
Route::view('loginrole', 'role');
Route::view('dashboard','lawyerdash');
Route::get('/clients',[ClientController::class,'index']);
Route::view('cases' , 'legalcases');
Route::view('firmdash','firmdashboard');
Route::view('meetings', 'scheduledmeetingsdash');
Route::view('lawyer', 'lawyerlist')->name('lawyer');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');

Route::get('/firmregister', function () {
    return view('firmregister');
});




