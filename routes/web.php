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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('-dashboard');
});


Route::group(['prefix' => 'lecturer', 'as' => 'lecturer', 'middleware' => 'lecturer'], function () {
    Route::get('/', [LecturerController::class, 'index'])->name('-dashboard');
});


Route::group(['prefix' => 'student', 'as' => 'student', 'middleware' => 'student'], function () {
    Route::get('/', [StudentController::class, 'index'])->name('-dashboard');
});
