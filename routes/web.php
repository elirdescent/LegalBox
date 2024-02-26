<?php

use App\Http\Controllers\LawyerAuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LegalCaseController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\MeetingsController;
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
Route::get('dashboard',[LawyerController::class,'dashboard']);
Route::get('/clients',[ClientController::class,'index'])->name('clients');
Route::view('cases' , 'legalcases');


Route::view('lawyer', 'lawyerlist')->name('lawyer');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');




Route::get('/cases', [LegalCaseController::class,'index'])->name('cases');
Route::post('/cases',[LegalCaseController::class,'store'])->name('legalcases.store');
Route::delete('/cases/{id}',[LegalCaseController::class,'destroy'])->name('cases.delete');
Route::put('/cases/{id}',[LegalCaseController::class,'update'])->name('cases.update');
Route::post('/cases/{name}', [LegalCaseController::class, 'filter'])->name('cases.filter');
Route::get('/casessearch', [LegalCaseController::class, 'search'])->name('cases.search');

Route::post('/meetings',[MeetingsController::class,'store'])->name('meetings.store');
Route::get('meetings', [MeetingsController::class,'index'] )->name('meetings');
Route::put('/meetings/{id}',[MeetingsController::class,'update'])->name('meetings.update');
Route::post('/meetings/{name}', [MeetingsController::class, 'filter'])->name('meetings.filter');
Route::delete('/meetings/{id}',[MeetingsController::class,'destroy'])->name('meetings.delete');

Route::get('/clientsearch', [ClientController::class, 'search'])->name('clients.search');
