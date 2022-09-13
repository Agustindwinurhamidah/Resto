<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return redirect('home');
});

Route::get('about-us', [AboutController::class, 'index']);
Route::get('home', [HomeController::class, 'index']);

Route::get('news/{slug}', [ArticleController::class, 'index']);

Route::get('products/{slug}', [PageController::class, 'products']);
Route::get('programs/{slug}', [PageController::class, 'program']);

Route::resource('contact-us', ContactController::class);