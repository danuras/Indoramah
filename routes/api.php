<?php

use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\EmailServiceApiController;
use App\Http\Controllers\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/unauthorized', function () {
    return response()->json([
        'success' => false,
    ], 401);
})->name('login');

Route::prefix('auth')->group(function (){
    Route::post('/login', [AuthApiController::class, 'login']);
    Route::post('/request-forget-password', [AuthApiController::class, 'requestForgetPassword']);
    Route::post('/send-token-verification', [AuthApiController::class, 'sendTokenVerification']);
    Route::post('/verify-update-password', [AuthApiController::class, 'verifyUpdatePassword']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('/logout', [AuthApiController::class, 'logout']);
        Route::post('/logoutAllDevice', [AuthApiController::class, 'logoutAllDevice']);
    });
    Route::prefix('user')->group(function () {
        Route::post('/register-user', [UserApiController::class, 'registerUser']);
        Route::post('/delete', [UserApiController::class, 'delete']);
        Route::post('/change-primary', [UserApiController::class, 'changePrimary']);
    });
    Route::prefix('email-service')->group(function () {
        Route::post('create-or-update', [EmailServiceApiController::class,'createOrUpdate']);
        Route::get('show',  [EmailServiceApiController::class,'show']);
    });
});