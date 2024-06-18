<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\JobController;
use \App\Http\Controllers\RegisteredUserController;
use \App\Http\Controllers\SessionController;

Route::get('/', [JobController::class, 'index']);

Route::get('/register', [RegisteredUserController::class], 'create');
Route::get('/register', [RegisteredUserController::class], 'store');

Route::get('/login', [SessionController::class], 'create');
Route::get('/login', [SessionController::class], 'store');
Route::delete('/login', [SessionController::class], 'destroy');
