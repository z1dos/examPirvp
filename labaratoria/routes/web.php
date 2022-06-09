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

Route::get('/', [App\Http\Controllers\LabController::class, 'index']);
Route::get('create', [App\Http\Controllers\LabController::class, 'createView']);
Route::get('create-post', [App\Http\Controllers\PostContoller::class, 'createPostView']);
Route::get('detail/{people}', [App\Http\Controllers\LabController::class, 'detail']);
Route::get('delete/{people}', [App\Http\Controllers\LabController::class, 'delete']);
Route::post('store-action', [App\Http\Controllers\LabController::class, 'store']);
Route::post('create-post-form', [App\Http\Controllers\PostContoller::class, 'store']);
