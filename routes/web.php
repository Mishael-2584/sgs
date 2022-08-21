<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use Database\Seeders\LecturerSeeder;
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
    return view('auths.login');
})->name('login');

Route::get('/signup', function () {
    return view('auths.signup');
})->name('signup');

Route::get('redirect', [AuthController::class, 'redirect'])->name('redirect');
Route::post('auth', [AuthController::class, 'auth'])->name('auth');
Route::post('/store', [AuthController::class, 'store'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('users/export/', [StudentController::class, 'export']);

// Route::group(['prefix' => 'admin', 'as' => 'admin', 'middleware' => 'admin'], function () {
//     Route::get('/', [AdminController::class, 'index'])->name('-dashboard');
// });


Route::group(['prefix' => 'lecturer', 'as' => 'lecturer', 'middleware' => 'lecturer'], function () {
        Route::get('/', [LecturerController::class, 'index'])->name('-dashboard');
        Route::get('/import-users', [StudentController::class, 'importUsers'])->name('-import');
        Route::post('/upload-users', [StudentController::class, 'uploadUsers'])->name('-upload');
        Route::get('/add-course', [CourseController::class, 'addcourse'])->name('-addcourse');
        Route::post('/course-submit', [CourseController::class, 'submitcourse'])->name('-submit-course');

});


// Route::group(['prefix' => 'student', 'as' => 'student', 'middleware' => 'student'], function () {
//     Route::get('/', [StudentController::class, 'index'])->name('-dashboard');
// });
