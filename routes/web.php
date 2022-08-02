<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::resource('/admin', UserController::class)->middleware('auth');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/detail', [HomeController::class, 'detail'])->name('detail');

Route::get('/list', [HomeController::class, 'list'])->name('list');

Route::get('/sign_in', [LoginController::class, 'sign_in'])->name('sign_in');
Route::post('/check_sign_in', [LoginController::class, 'check_sign_in'])->name('check_sign_in');
Route::post('/check_sign_up', [LoginController::class, 'check_sign_up'])->name('check_sign_up');
Route::get('/sign_up', [LoginController::class, 'sign_up'])->name('sign_up');
Route::get('/log_out', [LoginController::class, 'log_out'])->name('log_out');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
//Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
//Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');

