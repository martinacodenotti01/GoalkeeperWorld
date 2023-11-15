<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\articoloController;

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
Route::get('/articolo/{nomeArticolo}', [articoloController::class, 'dettaglio'])->name('dettaglio');