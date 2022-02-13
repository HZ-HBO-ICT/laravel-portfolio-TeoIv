<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\GalleryController;


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

Route::get('/faq', [FAQController::class, 'show']);

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/blog', [BlogController::class, 'show']);

//Route::get('/faq', [FAQController::class, 'show']);

Route::get('/gallery', [GalleryController::class, 'show']);
