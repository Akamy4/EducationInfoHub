<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Сертификаты
Route::get('/certificates', [\App\Http\Controllers\CertificateController::class, 'showCertificationForm'])->name('certificates');
Route::post('/certificates', [\App\Http\Controllers\CertificateController::class, 'store'])->name('сertificates.store');

//НИР
Route::get('/nir', [\App\Http\Controllers\NirController::class, 'showNirForm'])->name('nir');
Route::post('/nir', [\App\Http\Controllers\NirController::class, 'store'])->name('nir.store');

//Профиль
Route::delete('/profile/delete/profile', [\App\Http\Controllers\ProfileController::class, 'delete']);
Route::get('/profile/{id}', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'showProfileUpdateForm'])->name('profile.showProfileUpdateForm');
Route::put('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

//Образование
Route::get('/education', [\App\Http\Controllers\EducationController::class, 'showEducationForm'])->name('education');
Route::post('/education', [\App\Http\Controllers\EducationController::class, 'store'])->name('education.store');

//Образование
Route::get('/education', [\App\Http\Controllers\EducationController::class, 'showEducationForm'])->name('education');
Route::post('/education', [\App\Http\Controllers\EducationController::class, 'store'])->name('education.store');

// Регистрация
Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Авторизация
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
