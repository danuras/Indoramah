<?php

use App\Http\Controllers\AdvantageApiController;
use App\Http\Controllers\AdvantageContentApiController;
use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\BlogApiController;
use App\Http\Controllers\CardApiController;
use App\Http\Controllers\CardBoxApiController;
use App\Http\Controllers\CardTypeApiController;
use App\Http\Controllers\ColorApiController;
use App\Http\Controllers\CompanyProfileApiController;
use App\Http\Controllers\ContactApiController;
use App\Http\Controllers\ContentTypeApiController;
use App\Http\Controllers\EmailServiceApiController;
use App\Http\Controllers\OrderFlowApiController;
use App\Http\Controllers\SocialMediaApiController;
use App\Http\Controllers\TestimonyApiController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\WebAttributeApiController;
use App\Http\Controllers\WebContentApiController;
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

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthApiController::class, 'login']);
    Route::post('/request-forget-password', [AuthApiController::class, 'requestForgetPassword']);
    Route::post('/send-token-verification', [AuthApiController::class, 'sendTokenVerification']);
    Route::post('/verify-update-password', [AuthApiController::class, 'verifyUpdatePassword']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('advantage')->group(function () {
        Route::post('create-or-update', [AdvantageApiController::class, 'createOrUpdate']);
        Route::get('show', [AdvantageApiController::class, 'show']);
    });

    Route::prefix('advantage-content')->group(function () {
        Route::post('create', [AdvantageContentApiController::class, 'create']);
        Route::post('update', [AdvantageContentApiController::class, 'update']);
        Route::delete('delete/{id}', [AdvantageContentApiController::class, 'delete']);
        Route::get('show', [AdvantageContentApiController::class, 'show']);
    });

    Route::prefix('auth')->group(function () {
        Route::post('/logout', [AuthApiController::class, 'logout']);
        Route::post('/logout-all-device', [AuthApiController::class, 'logoutAllDevice']);
    });

    Route::prefix('blog')->group(function () {
        Route::post('create', [BlogApiController::class, 'create']);
        Route::post('update', [BlogApiController::class, 'update']);
        Route::delete('delete/{id}', [BlogApiController::class, 'delete']);
        Route::get('show', [BlogApiController::class, 'show']);
    });

    Route::prefix('card')->group(function () {
        Route::post('create', [CardApiController::class, 'create']);
        Route::post('update', [CardApiController::class, 'update']);
        Route::delete('delete/{id}', [CardApiController::class, 'delete']);
    });

    Route::prefix('card-box')->group(function () {
        Route::post('create', [CardBoxApiController::class, 'create']);
        Route::post('update', [CardBoxApiController::class, 'update']);
        Route::get('show/{id}', [CardBoxApiController::class, 'show']);
    });

    Route::prefix('card-type')->group(function () {
        Route::post('create', [CardTypeApiController::class, 'create']);
        Route::post('update', [CardTypeApiController::class, 'update']);
        Route::delete('delete/{id}', [CardTypeApiController::class, 'delete']);
        Route::get('show/{id}', [CardTypeApiController::class, 'show']);
    });

    Route::prefix('color')->group(function () {
        Route::post('create-or-update', [ColorApiController::class, 'createOrUpdate']);
        Route::get('show', [ColorApiController::class, 'show']);
    });
    
    Route::prefix('company-profile')->group(function () {
        Route::post('create-or-update', [CompanyProfileApiController::class, 'createOrUpdate']);
        Route::get('show', [CompanyProfileApiController::class, 'show']);
    });

    Route::prefix('contact')->group(function () {
        Route::post('create-or-update', [ContactApiController::class, 'createOrUpdate']);
        Route::get('show', [ContactApiController::class, 'show']);
    });

    Route::prefix('content-type')->group(function () {
        Route::post('create', [ContentTypeApiController::class, 'create']);
        Route::post('update', [ContentTypeApiController::class, 'update']);
        Route::delete('delete/{id}', [ContentTypeApiController::class, 'delete']);
    });
    
    Route::prefix('email-service')->group(function () {
        Route::post('create-or-update', [EmailServiceApiController::class, 'createOrUpdate']);
        Route::get('show', [EmailServiceApiController::class, 'show']);
    });

    Route::prefix('order-flow')->group(function () {
        Route::post('create', [OrderFlowApiController::class, 'create']);
        Route::post('update', [OrderFlowApiController::class, 'update']);
        Route::delete('delete/{id}', [OrderFlowApiController::class, 'delete']);
        Route::get('show', [OrderFlowApiController::class, 'show']);
    });

    Route::prefix('social-media')->group(function () {
        Route::post('create-or-update', [SocialMediaApiController::class, 'createOrUpdate']);
        Route::get('show', [SocialMediaApiController::class, 'show']);
    });

    Route::prefix('testimony')->group(function () {
        Route::post('create', [TestimonyApiController::class, 'create']);
        Route::post('update', [TestimonyApiController::class, 'update']);
        Route::delete('delete/{id}', [TestimonyApiController::class, 'delete']);
        Route::get('show', [TestimonyApiController::class, 'show']);
    });
    
    Route::prefix('user')->group(function () {
        Route::post('/register-user', [UserApiController::class, 'registerUser']);
        Route::post('/delete', [UserApiController::class, 'delete']);
        Route::post('/change-primary', [UserApiController::class, 'changePrimary']);
        Route::get('/show', [UserApiController::class, 'show']);
    });
    
    Route::prefix('web-attribute')->group(function () {
        Route::post('create-or-update', [WebAttributeApiController::class, 'createOrUpdate']);
        Route::get('show', [WebAttributeApiController::class, 'show']);
    });

    Route::prefix('web-content')->group(function () {
        Route::post('create-card', [WebContentApiController::class, 'createCard']);
        Route::post('create-advantage', [WebContentApiController::class, 'createAdvantage']);
        Route::post('create-maps', [WebContentApiController::class, 'createMaps']);
        Route::post('create-testimony', [WebContentApiController::class, 'createTestimony']);
        Route::post('create-blog', [WebContentApiController::class, 'createBlog']);
        Route::post('update', [WebContentApiController::class, 'update']);
        Route::delete('delete-card/{id}', [WebContentApiController::class, 'deleteCard']);
        Route::delete('delete-advantage/{id}', [WebContentApiController::class, 'deleteAdvantage']);
        Route::delete('delete-maps/{id}', [WebContentApiController::class, 'deleteMaps']);
        Route::delete('delete-testimony/{id}', [WebContentApiController::class, 'deleteTestimony']);
        Route::delete('delete-blog/{id}', [WebContentApiController::class, 'deleteBlog']);
        Route::get('show', [WebContentApiController::class, 'show']);
    });
});