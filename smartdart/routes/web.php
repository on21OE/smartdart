<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gameController;
use App\Http\Controllers\GameHistoryController;
use App\Http\Controllers\GameStatsController;

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
    return view('welcome');
})->middleware(['auth', 'verified'])->name('/');

Route::get('/game', function () {
    return view('game');
})->middleware(['auth', 'verified'])->name('game');

Route::get('/statistics', function () {
    return view('statistics');
})->middleware(['auth', 'verified'])->name('statistics');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('game2', [gameController::class, 'create'])->name('game2');

Route::get('gameHistory', [GameHistoryController::class, 'showHistory'])->name('gameHistory');

Route::get('gameStats', [GameStatsController::class, 'showStats'])->name('gameStats');

Route::post('addGame', [GameStatsController::class, 'addGame'])->name('addGame');

require __DIR__.'/auth.php';
