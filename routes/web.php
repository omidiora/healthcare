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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/complete/profile', [App\Http\Controllers\HomeController::class, 'CompleteProfile'])->name('home');
Route::post('/complete/profile', [App\Http\Controllers\HomeController::class, 'SubmitProfile'])->name('SubmitProfile');
Route::get('/all', [App\Http\Controllers\HomeController::class, 'all'])->name('all');
Route::get('/student', [App\Http\Controllers\HomeController::class, 'student'])->name('student');
Route::get('generate-pdf', [App\Http\Controllers\HomeController::class, 'generatePDF'])->name("generatePDF");


Route::group(['prefix' => 'admin'], function () {
    Route::get('user', [App\Http\Controllers\AdminController::class, 'index'])->name("personalProfile");
    Route::get('users', [App\Http\Controllers\AdminController::class, 'showDetails']);
    Route::get('date/{users:schedule_date}', [App\Http\Controllers\AdminController::class, 'printStudentDate']);
});
