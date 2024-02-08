<?php

use App\Http\Controllers\LawyerAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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
Route::view('/register','register');



Route::post('/lawyerregister', [LawyerAuthController::class, 'register'])->name('lawyer.register');
Route::post('/lawyerlogin', [LawyerAuthController::class, 'login'])->name('lawyer.login');

Route::view('login', 'lawyerlogin');
Route::view('dashboard','lawyerdash')->name('dashboard');

Route::view('home','home')->name('home');



// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/lawyerlogout', [LawyerAuthController::class, 'logout'])->name('lawyer.logout');
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});