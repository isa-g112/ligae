<?php


use Illuminate\Support\Facades\Route;

use App\Models\Game;
use App\Models\Goal;
use App\Models\Player;
use App\Models\President;
use App\Models\Team;

use App\Http\Controllers\GameController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\TeamController;





//Rutas president
Route::get('president', [PresidentController::class, 'index'])->name('president.index');
Route::get('president/create', [PresidentController::class, 'create'])->name('president.create');
Route::post('president/store', [PresidentController::class, 'store'])->name('president.store');
Route::get('president/{president}', [PresidentController::class, 'show'])->name('president.show');
Route::put('president/{president}', [PresidentController::class, 'update'])->name('president.update');
Route::delete('president/{president}', [PresidentController::class, 'destroy'])->name('president.destroy');
Route::get('president/{president}/edit', [PresidentController::class, 'edit'])->name('president.edit');

//Rutas game
Route::get('game', [GameController::class, 'index'])->name('game.index');
Route::get('game/create', [GameController::class, 'create'])->name('game.create');
Route::post('game/store', [GameController::class, 'store'])->name('game.store');
Route::get('game/{game}', [GameController::class, 'show'])->name('game.show');
Route::put('game/{game}', [GameController::class, 'update'])->name('game.update');
Route::delete('game/{game}', [GameController::class, 'destroy'])->name('game.destroy');
Route::get('game/{game}/edit', [GameController::class, 'edit'])->name('game.edit');

//Rutas goal
Route::get('goal', [GoalController::class, 'index'])->name('goal.index');
Route::get('goal/create', [GoalController::class, 'create'])->name('goal.create');
Route::post('goal/store', [GoalController::class, 'store'])->name('goal.store');
Route::get('goal/{goal}', [GoalController::class, 'show'])->name('goal.show');
Route::put('goal/{goal}', [GoalController::class, 'update'])->name('goal.update');
Route::delete('goal/{goal}', [GoalController::class, 'destroy'])->name('goal.destroy');
Route::get('goal/{goal}/edit', [GoalController::class, 'edit'])->name('goal.edit');

//Rutas player
Route::get('player', [PlayerController::class, 'index'])->name('player.index');
Route::get('player/create', [PlayerController::class, 'create'])->name('player.create');
Route::post('player/store', [PlayerController::class, 'store'])->name('player.store');
Route::get('player/{player}', [PlayerController::class, 'show'])->name('player.show');
Route::put('player/{player}', [PlayerController::class, 'update'])->name('player.update');
Route::delete('player/{player}', [PlayerController::class, 'destroy'])->name('player.destroy');
Route::get('player/{player}/edit', [PlayerController::class, 'edit'])->name('player.edit');



//Rutas team
Route::get('team', [TeamController::class, 'index'])->name('team.index');
Route::get('team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('team/store', [TeamController::class, 'store'])->name('team.store');
Route::get('team/{team}', [TeamController::class, 'show'])->name('team.show');
Route::put('team/{team}', [TeamController::class, 'update'])->name('team.update');
Route::delete('team/{team}', [TeamController::class, 'destroy'])->name('team.destroy');
Route::get('team/{team}/edit', [TeamController::class, 'edit'])->name('team.edit');
