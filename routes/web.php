<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\ArticoloController;
use App\Http\Controllers\RecensioniController;

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

Route::get('/', [homeController::class, 'welcome'])->name('homepage');
Route::get('/shop', [shopController::class, 'shop'])->name('shop');
Route::get('/articolo/{nomeArticolo}', [ArticoloController::class, 'dettaglio'])->name('dettaglio');

//? recensioni
Route::get('/recensioni', [RecensioniController::class, 'reviews'])->name('reviews');
Route::post('add-review', [RecensioniController::class, 'add_review'])->name('add_review');