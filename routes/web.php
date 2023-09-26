<?php

use App\Http\Controllers\DasahboardController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\UsersController;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DasahboardController::class, 'index']);
Route::get('/master', [MasterController::class, 'index']);
Route::get('/master/user', [UsersController::class, 'index']);
Route::get('/master/dept', [DeptController::class, 'index']);
Route::get('/master/level', [LevelController::class, 'index']);
