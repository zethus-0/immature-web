<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// General Page routing
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/team', [PagesController::class, 'team'])->name('team');
Route::get('/privacypolicy', [PagesController::class, 'privacy']);
Route::get('/terms', [PagesController::class, 'terms']);
Route::get('/contact', [PagesController::class, 'contact']);

// User profile routing
Route::get('user/profile/{id}', [UserController::class, 'profile'])->name('user.profile');
Route::put('user/profile/{id}', [UserController::class, 'update'])->name('profile.update');

// Blog page routing
Route::resource('/blog', PostsController::class);
Route::resource('/blog.create', PostsController::class);

// Auth pages Login, Logout, Register etc...
Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

