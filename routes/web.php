<?php

use App\Http\Controllers\BoardGameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/show', function () {
    return view('show');
});


Route::get('/external-boardgames', [BoardGameController::class, 'fetchBoardGames']);

Route::get('/boardgames', [BoardGameController::class, 'index'])->name('boardgame.jeux');
