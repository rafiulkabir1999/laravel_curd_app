<?php

use Illuminate\Routing\Controller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('student.create');
});

Route::get('/student',[StudentController::class,'index'])->name('student.index');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/update/{id}',[StudentController::class,'update'])->name('student.update');

