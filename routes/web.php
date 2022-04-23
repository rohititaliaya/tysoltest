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

Route::get('/',[App\Http\Controllers\TermController::class,'index']);
Route::post('/subject/create',[App\Http\Controllers\SubjectMasterController::class,'store'])->name('subject.store');
Route::get('/fac',[App\Http\Controllers\FacultyController::class,'index']);
Route::post('/faculty/create',[App\Http\Controllers\FacultyController::class,'store'])->name('faculty.store');
Route::get('/factimetable',[App\Http\Controllers\FacultyTimeTableController::class,'index']);
Route::post('/factable/create',[App\Http\Controllers\FacultyTimeTableController::class,'store'])->name('faculty.store');
// Route::resource('subject', 'App\Http\Controllers\Admin\GiftcardController',['names' => 'subject']);

// Route::resource('/subjects','App\Http\Controllers\SubjectMasterController');
