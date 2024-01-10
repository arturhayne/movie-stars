<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\StarWarsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/actors', [ActorController::class, 'index'])->name('actors.index');
Route::get('/star-wars', [StarWarsController::class, 'index'])->name('star-wars.index');
