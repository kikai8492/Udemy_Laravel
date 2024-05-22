<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;
use App\Http\Controllers\EventController;

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
Route::get('/users/{id}',[RequestSampleController::class, 'profile'])->name(name:'profile');
Route::get('/products/{category}/{year}',[RequestSampleController::class, 'productsArchive']);
Route::get('/route-link', [RequestSampleController::class, 'route-link']);
Route::get('/login', [RequestSampleController::class, 'loginForm']);
Route::post('/login',[RequestSampleController::class, 'login']) ->name('login');


Route::resource('/events', EventController::class)-> only(['create', 'store']);