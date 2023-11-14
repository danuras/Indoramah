<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\SendMessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [NavigationController::class, 'home'])->name('home');

Route::post('send-message', [SendMessageController::class, 'send'])->name('send-message');


Route::get('advantage', [NavigationController::class, 'advantage'])->name('advantage');

Route::get('blog', [NavigationController::class, 'blog'])->name('blog');

Route::get('company-profile', [NavigationController::class, 'companyProfile'])->name('company-profile');

Route::get('card-box/{title}/{type}/{id}', [NavigationController::class, 'cardBoxAll'])->name('card-box');
Route::get('card-content/{title}/{type}/{id}/', [NavigationController::class, 'getContent'])->name('card-content');

Route::get('order-step', [NavigationController::class, 'orderStep'])->name('order-step');

Route::get('send-email', [NavigationController::class, 'sendEmail'])->name('send-email');