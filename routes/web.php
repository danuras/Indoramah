<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('send-message', [SendMessageController::class, 'send'])->name('send-message');


Route::get('advantage', function(){
    return view('pages.advantage');
})->name('advantage');

Route::get('blog', function(){
    return view('pages.blog');
})->name('blog');

Route::get('company-profile', function(){
    return view('pages.company-profile');
})->name('company-profile');

Route::get('customer', function(){
    return view('pages.customer');
})->name('customer');

Route::get('order-step', function(){
    return view('pages.order-step');
})->name('order-step');

Route::get('portfolio', function(){
    return view('pages.portfolio');
})->name('portfolio');

Route::get('send-email', function(){
    return view('pages.send-email');
})->name('send-email');

Route::prefix('services')->group(function(){
    Route::get('/', function (){
        return view('pages.services.index');
    })->name('services');
    Route::get('services-example', function(){
        return view('pages.services.services-example');
    });
    Route::get('services-example-2', function(){
        return view('pages.services.services-example-2');
    });
});