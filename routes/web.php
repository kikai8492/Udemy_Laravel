<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;

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

Route::get('/form', [RequestSampleController::class, 'form']);
Route::get('/query-strings', [RequestSampleController::class, 'queryStrings']);
Route::get('/users/{id}',[RequestSampleController::class, 'profile']);
Route::get('/products/{category}/{year}',[RequestSampleController::class, 'productsArchive']);