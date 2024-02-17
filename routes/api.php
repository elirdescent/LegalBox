<?php

use App\Http\Controllers\LawyerAuthController;
use App\Http\Controllers\LawFirmAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::resource('products', ProductController::class);

// Public routes





Route::post('/lawyerregister', [LawyerAuthController::class, 'register'])->name('lawyer.register');
Route::post('/lawyerlogin', [LawyerAuthController::class, 'login'])->name('lawyer.login');

Route::post('/lawfirmregister', [LawFirmAuthController::class, 'register'])->name('lawfirm.register');
Route::post('/lawfirmlogin', [LawFirmAuthController::class, 'login'])->name('lawfirm.login');

Route::view('login', 'lawyerlogin');

Route::view('dashboard','lawyerdash')->name('dashboard');
Route::view('dashboard', 'firmdashboard') ->name('firmdashboard');

Route::view('home','home')->name('home');



    Route::post('/clients/{id}',[ClientController::class,'destroy'])->name('clients.delete');
    Route::resource('clients',ClientController::class);
    Route::post('/lawyerlogout', [LawyerAuthController::class, 'logout'])->name('lawyer.logout');
    Route::post('/lawfirmlogout', [LawFirmAuthController::class, 'logout'])->name('lawfirm.logout');

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {


   


Route::get('/clients',[ClientController::class,'index']);
Route::get('/clients/search/{name}',[ClientController::class,'search']);



Route::post('/clients',[ClientController::class,'store'])->name('clients.store');
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});