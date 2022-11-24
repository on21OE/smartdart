<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameHistoryController;
use App\Http\Controllers\GameStatsController;
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

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified']);

Route::get('/game', function () {
    return view('game');
})->middleware(['auth', 'verified'])->name('game');

Route::get('gameHistory', [GameHistoryController::class, 'showHistory'])->middleware(['auth', 'verified'])->name('gameHistory');

Route::get('gameStats', [GameStatsController::class, 'showStats'])->middleware(['auth', 'verified'])->name('gameStats');

Route::get('allTimeStats', [AllTimeStatsController::class, 'showAllTimeStats'])->middleware(['auth', 'verified'])->name('allTimeStats');

Route::get('editHistory/{id}', [GameHistoryController::class, 'editHistory'])->middleware(['auth', 'verified'])->name('editHistory');

Route::post('updateHistory', [GameHistoryController::class, 'updateHistory'])->middleware(['auth', 'verified'])->name('updateHistory');

Route::get('deleteHistory/{id}', [GameHistoryController::class, 'deleteHistory'])->middleware(['auth', 'verified'])->name('deleteHistory');

Route::post('saveGame', [GameStatsController::class, 'saveGame'])->middleware(['auth', 'verified'])->name('saveGame');

Route::get('getOtherUserStats', [AllTimeStatsController::class, 'getOtherUserStats'])->middleware(['auth', 'verified'])->name('getOtherUserStats');

Route::post('editAreStatsPublic', [AllTimeStatsController::class, 'editAreStatsPublic'])->middleware(['auth', 'verified'])->name('editAreStatsPublic');

require __DIR__.'/auth.php';
