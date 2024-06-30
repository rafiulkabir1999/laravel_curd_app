<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/student',[StudentController::class,'index'])->name('student.index');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::delete('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');


Route::get('/user',[AuthController::class,'user'])->name('auth.user');
Route::get('/user/logout',[AuthController::class,'logout'])->name('auth.logout');
Route::get('/register',[AuthController::class,'register'])->name('auth.register');

Route::post('/register',[AuthController::class,'storeUser'])->name('auth.storeUser');


Route::get('/login',[AuthController::class,'index'])->name('auth.login');
Route::post('/login',[AuthController::class,'check'])->name('auth.check');

// Route::get('user/profile',[AuthController::class,'getProfile'])->name('auth.profile');

Route::get('profile',[ProfileController::class,'index'])->name('user.profile');

