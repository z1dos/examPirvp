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

Route::get('/', [\App\Http\Controllers\RoomController::class, 'index']);
Route::get('detail/{room}', [\App\Http\Controllers\RoomController::class, 'detail']);
Route::get('storeView/{room}', [\App\Http\Controllers\RoomController::class, 'storeView']);
Route::get('updateRoom/{room}', [\App\Http\Controllers\RoomController::class, 'updateRoom']);
Route::post('update/{room}', [\App\Http\Controllers\RoomController::class, 'update']);
