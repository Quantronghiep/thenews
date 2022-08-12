<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Web\UserLoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

//Route::resource('/admin', UserController::class)->middleware(['auth', 'check_admin']);//->middleware('verified');

//Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');


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

Route::get('/email/verify', function () {
    return view('login.verify');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/')->with('success', 'Xác thực thành công');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//facebook login
Route::get('/auth/facebook/redirect', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');

Route::get('/auth/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

//google login
Route::get('/auth/google/redirect', [LoginController::class, 'redirectToGoogle'])->name('login.google');

Route::get('/auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::prefix('web')->group(function () {
    Route::get('profile/{id}', [UserLoginController::class, 'profile'])->middleware('verified')->name('web.profile');
});
