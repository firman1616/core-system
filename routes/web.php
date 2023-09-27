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

Route::get('dashboard', [DasahboardController::class, 'index']);
Route::get('master', [MasterController::class, 'index']);
Route::get('user', [UsersController::class, 'index']);
Route::get('level', [LevelController::class, 'index']);
// Route::post('AddData', [DeptController::class,'AddData']);
Route::get('dept', [DeptController::class, 'index']);
Route::post('dept', [DeptController::class, 'store']);
// Route::resource('master/dept', DeptController::class);
// Route::post('store', DeptController::class, 'store')->name("dept.store");
// Route::resource('products', ProductAjaxController::class);
// Route::post('AddData', [DeptController::class, 'AddData'])->name('AddData');
