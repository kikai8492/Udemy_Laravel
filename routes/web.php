<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/helloworld', fn () => view('helloworld'));

Route::get('/', fn() => view('index'));
Route::get('/carriculum', fn() => view('carriculum'));

// 世界の時間＝
Route::get('/world-time', [UtilityController::class, 'worldTime']);

// おみくじ
Route::get('/omikuji', [GameController::class, 'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall', [GameController::class, 'montyHall']);