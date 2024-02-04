<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Main page load
Route::get('/',[DashboardController::class,'main'])->name('home');

//Backend Dashboard
Route::get('Main-dashboard',[StudentController::class,'index'])->name('index');
Route::get('Admin-dashboard',[StudentController::class,'list'])->name('Main');

//Student page
Route::get('user-create',[StudentController::class,'create'])->name('StudentCreate');
Route::post('user-Store',[StudentController::class,'store'])->name('StudentStore');
Route::get('user-Edit/{student}',[UpdateController::class,'edit'])->name('StudentEdit');
Route::post('user-Update/{student}',[UpdateController::class,'update'])->name('StudentUpdate');
Route::get('user-Delete/{student}',[UpdateController::class,'destroy'])->name('delete');

//Teacher page
Route::get('teacher-registration',[TeacherController::class,'create'])->name('teacherPage');
Route::post('teacher-store',[TeacherController::class,'store'])->name('teacherStore');

