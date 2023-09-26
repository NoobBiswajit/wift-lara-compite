<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// public routes
Route::POST('/register', [UserController::class, 'register']);
Route::POST('/login', [UserController::class, 'login']);
// Route::POST('/send_reset_password_email', [PasswordResetController::class, 'send_reset_password_email']);
Route::POST('/send_reset_password_email', [PasswordResetController::class, 'send_reset_password_email']);

// this route is for contact
// Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
//     Route::resource('contacts', ContactController::class)->except(['create', 'edit']);
// });

Route::POST('/store_contact', [contactController::class, 'store_contact']);

Route::POST('/contact_us', [ContactUsController::class, 'contact_us']);

// protected routes

Route::middleware(['auth:sanctum'])->group(function () {
    Route::POST('/logout', [UserController::class, 'logout']);
    Route::get('/loggeduser', [UserController::class, 'logged_user']);
    Route::POST('/changepassword', [UserController::class, 'change_password']);
});
