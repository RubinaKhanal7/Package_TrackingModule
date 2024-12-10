<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\FrontViewController;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
     ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])
     ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
     ->name('password.request');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
     ->name('password.email');
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
     ->name('password.reset');
Route::post('/reset-password', [NewPasswordController::class, 'store'])
     ->name('password.update');
Route::get('/verify-email/{id}/{hash}', [EmailVerificationPromptController::class, '__invoke'])
     ->name('verification.verify');
Route::get('/verify-email', [EmailVerificationNotificationController::class, 'create'])
     ->middleware('auth')
     ->name('verification.notice');
Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
     ->middleware('auth')
     ->name('verification.send');
Route::post('/user/confirm-password', [ConfirmablePasswordController::class, 'store'])
     ->middleware('auth')
     ->name('password.confirm');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FrontViewController::class, 'index'])->name('front.index');

Route::prefix('/admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
     Route::get('/', [AdminController::class, 'index'])->name('index');
});

