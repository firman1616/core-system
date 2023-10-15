<?php

use App\Http\Controllers\DasahboardController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\RoleController;
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

Route::get('dashboard', [DasahboardController::class, 'index']);
Route::get('master', [MasterController::class, 'index']);
Route::get('user', [UsersController::class, 'index']);
Route::get('level', [LevelController::class, 'index']);

// dept
Route::get('dept', [DeptController::class, 'index']);
Route::post('deptStoreOrUpdate', [DeptController::class, 'storeAndUpdate']);
Route::delete('deptDestroy/{id}', [DeptController::class, 'destroy']);
Route::get('deptEdit/{id}', [DeptController::class, 'vedit']);
Route::get('tableDepartement', [DeptController::class, 'tableDepartement']);

// role
Route::get('role', [RoleController::class, 'index']);
Route::post('roleStoreOrUpdate', [RoleController::class, 'storeAndUpdate']);
Route::get('tableRole', [RoleController::class, 'tableRole']);
