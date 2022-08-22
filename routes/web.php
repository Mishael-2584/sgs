<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AssignmentTypeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizTypeController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\StudentController;
use App\Models\Score;
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
        Route::get('', [LecturerController::class, 'index'])->name('-dashboard');
        Route::get('/import-users', [StudentController::class, 'importUsers'])->name('-import');
        Route::post('/upload-users', [StudentController::class, 'uploadUsers'])->name('-upload');
        Route::get('/add-course', [CourseController::class, 'addcourse'])->name('-addcourse');
        Route::post('/course-submit', [CourseController::class, 'submitcourse'])->name('-submit-course');
        Route::get('/all-results', [ScoreController::class, 'allresults'])->name('-allresults');
        Route::get('/view-result/{id}', [ScoreController::class, 'view_result'])->name('-view-result');
        Route::post('/result-submit/{id}', [ScoreController::class, 'submit_result'])->name('-submit-result');
        Route::get('/add-material', [CourseController::class, 'addmaterial'])->name('-add-material');
        Route::post('/quiz-add', [QuizTypeController::class, 'addquiz'])->name('-add-quiz');
        Route::post('/assignment-add', [AssignmentTypeController::class, 'addassignment'])->name('-add-assignment');
        Route::get('/part-results', [ScoreController::class, 'partresults'])->name('-part-results');
        Route::get('/quiz-result/{id}', [QuizController::class, 'quizresult'])->name('-quiz-result');
        Route::get('/assignment-result/{id}', [AssignmentController::class, 'assignmentresult'])->name('-assignments-result');
        Route::get('/quiz-grade/{id}', [QuizController::class, 'quizgrade'])->name('-quiz-grade');
        Route::get('/assignment-grade/{id}', [AssignmentController::class, 'assignmentgrade'])->name('-assignment-grade');

        Route::post('/submit_assignment_result/{id}', [AssignmentController::class, 'submit_assignment_result'])->name('-submit-assignment_result');
        Route::post('/submit_quiz_result/{id}', [QuizController::class, 'submit_quiz_result'])->name('-submit-quiz_result');
}); 


// Route::group(['prefix' => 'student', 'as' => 'student', 'middleware' => 'student'], function () {
//     Route::get('/', [StudentController::class, 'index'])->name('-dashboard');
// });
