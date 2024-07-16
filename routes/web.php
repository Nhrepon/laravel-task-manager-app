<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskController1;


/* Route::get('/', [TaskController::class, 'index']);

Route::get('/doSomething', [TaskController::class, 'doSomething']);
Route::get('/update', [TaskController::class, 'update']);
Route::get('/show/{task}', [TaskController::class, 'show']); */


Route::resource('/task', TaskController1::class);
