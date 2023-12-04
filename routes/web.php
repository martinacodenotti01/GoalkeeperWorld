<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticoloController;

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

Route::get('/', [HomeController::class, 'welcome'])->name('homepage');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/articolo/{nomeArticolo}', [ArticoloController::class, 'dettaglio'])->name('dettaglio');

//? recensioni
Route::get('/recensioni', [ReviewController::class, 'reviews'])->name('reviews');
Route::get('/add-review', [ReviewController::class, 'add_review'])->name('add_review');
Route::post('/added-review', [ReviewController::class, 'added_review'])->name('added_review');

//? profilo user
Route::get('/profile', [UserController::class, 'profile'])->name('profile');