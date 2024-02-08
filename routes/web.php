<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\Peoplecontroller;

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
Route::get('/', [AnimeController::class,'home'])->name('home');

Route::get('/genres', [AnimeController::class,'genres'])->name('genres');

Route::get('/genere/{genre_id}', [AnimeController::class,'byGenre'])->name('anime.genre');

Route::get('/anime/{id}', [AnimeController::class,'anime'])->name('anime.byId');

Route::get('/magazines',[AnimeController::class,'magazine'])->name('magazines.show');



