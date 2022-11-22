<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gameController;
use App\Http\Controllers\GameHistoryController;
use App\Http\Controllers\GameStatsController;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\AllTimeStatsController;

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

Route::get('game2', [gameController::class, 'create'])->middleware(['auth', 'verified'])->name('game2');

Route::get('gameHistory', [GameHistoryController::class, 'showHistory'])->middleware(['auth', 'verified'])->name('gameHistory');

Route::get('gameStats', [GameStatsController::class, 'showStats'])->middleware(['auth', 'verified'])->name('gameStats');

Route::get('addGame', [GameStatsController::class, 'addGame'])->middleware(['auth', 'verified'])->name('addGame');

Route::get('userSettings', [UserSettingsController::class, 'showSettings'])->middleware(['auth', 'verified'])->name('userSettings');

Route::post('changeUserName', [UserSettingsController::class, 'changeUserName'])->middleware(['auth', 'verified'])->name('changeUserName');

Route::get('allTimeStats', [AllTimeStatsController::class, 'showAllTimeStats'])->middleware(['auth', 'verified'])->name('allTimeStats');

Route::get('editHistory/{id}', [GameHistoryController::class, 'editHistory'])->middleware(['auth', 'verified'])->name('editHistory');

Route::post('updateHistory', [GameHistoryController::class, 'updateHistory'])->middleware(['auth', 'verified'])->name('updateHistory');

Route::get('deleteHistory/{id}', [GameHistoryController::class, 'deleteHistory'])->middleware(['auth', 'verified'])->name('deleteHistory');

Route::post('saveGame', [GameStatsController::class, 'saveGame'])->middleware(['auth', 'verified'])->name('saveGame');
require __DIR__.'/auth.php';
