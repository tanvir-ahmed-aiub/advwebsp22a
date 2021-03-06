<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
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


//Route::get('/login','PagesController@index');

Route::get('/',[PagesController::class,'index'])->name('home');
Route::get('/login',[PagesController::class,'login'])->name('login');
Route::get('/registration',[PagesController::class,'register'])->name('registration');

Route::get('/student/create',[StudentController::class,'create']);
Route::get('/student/edit',[StudentController::class,'edit']);
Route::get('/student/details/{id}',[StudentController::class,'get'])->name('student.details');
Route::get('/student/list',[StudentController::class,'list'])->name('student.list');

Route::post('/registration',[PagesController::class,'registersubmit'])->name('register.submit');
Route::post('/login',[PagesController::class,'loginsubmit'])->name('login.submit');
Route::get('/department/list',[DepartmentController::class,'list'])->middleware('auth.user')->name('department.list');
Route::get('/department/details/{id}',[DepartmentController::class,'details'])->middleware('auth.user')->name('department.details');
Route::get('/logout',[PagesController::class,'logout'])->name('logout');