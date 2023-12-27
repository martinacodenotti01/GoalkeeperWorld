<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CartController;

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
// Rotta home
Route::get('/', [HomeController::class, 'welcome'])->name('homepage');

// Rotte per lo shop
Route::get('/shop', [ShopController::class, 'shop_index'])->name('shop_index');
Route::get('/articolo/{article}', [ShopController::class, 'article_show'])->name('article_show');
Route::post('/shop-filter', [ShopController::class, 'shop_filter'])->name('shop_filter');
Route::get('/ricerca-annuncio', [ShopController::class, 'searchArticle'])->name('searchArticle');

// Rotte per il carrello
Route::get('/il-tuo-carrello', [CartController::class, 'cart_index'])->name('cart_index')->middleware('auth');
Route::post('/aggiunto-al-carrello/{article}', [CartController::class, 'addToCart'])->name('addToCart');
Route::delete('/rimosso-dal-carrello/{article}', [CartController::class, 'removeToCart'])->name('removeToCart');

// Rotte per le recensioni
Route::get('/recensioni', [ReviewController::class, 'review_index'])->name('review_index');
Route::get('/aggiungi-recensione', [ReviewController::class, 'review_create'])->name('review_create');
Route::post('/recensione-aggiunta', [ReviewController::class, 'review_store'])->name('review_store');

// Rotte per profilo user
Route::get('/profilo', [UserController::class, 'profile'])->name('profile');