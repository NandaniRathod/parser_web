<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\BookmarkdController;




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

Route::resource('resume', ResumeController::class)->middleware('auth');
Route::resource('upload', UploadController::class)->middleware('auth');
Route::resource('bookmark', BookmarkdController::class)->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/resumes/{filename}', [ResumeController::class, 'download'])->name('resume.download');


Route::get('/main-home', function () {return view('home_main');});
Route::get('/try', function () {return view('rial');});
