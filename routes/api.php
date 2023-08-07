<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Сертифакаты
//Route::get('/certificates', [\App\Http\Controllers\CertificateController::class, 'showCertificationForm'])->name('certificates');
//Route::post('/certificates', [\App\Http\Controllers\CertificateController::class, 'store'])->name('сertificates.store');

// Регистрация
//Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
//Route::post('/register', 'RegisterController@register');

// Авторизация
//Route::get('/login', 'LoginController@showLoginForm')->name('login');
//Route::post('/login', 'LoginController@login');
//Route::post('/logout', 'LoginController@logout')->name('logout');


