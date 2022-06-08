<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\TodoController::class, 'index']);
Route::get('create', [\App\Http\Controllers\TodoController::class, 'createView']);
Route::get('details/{todo}', [\App\Http\Controllers\TodoController::class, 'detail']);
Route::get('update/{todo}', [\App\Http\Controllers\TodoController::class, 'updateView']);
Route::post('store-add', [\App\Http\Controllers\TodoController::class, 'store']);
Route::post('update-task/{todo}', [\App\Http\Controllers\TodoController::class, 'update']);
Route::get('delete/{todo}', [\App\Http\Controllers\TodoController::class, 'delete']);
Route::get('done/{todo}', [\App\Http\Controllers\TodoController::class, 'done']);
