<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AuthenticateMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;

Route::get('/', function () {
    return view('landing');
});

//Route::get('/student',[StudentController::class,'index'])->middleware(AuthenticateMiddleware::class)->name('student.index');
// Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
// Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
// Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
// Route::put('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
// Route::delete('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');

Route::middleware([AuthenticateMiddleware::class])->group(function(){
    Route::prefix('students')->group(function(){
        Route::get('/',[StudentController::class,'index'])->name('student.index');
        Route::post('/store',[StudentController::class,'store'])->name('student.store');
        Route::get('/create',[StudentController::class,'create'])->name('student.create');
        Route::get('/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
        Route::put('/update/{id}',[StudentController::class,'update'])->name('student.update');
        Route::delete('/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');
    });
});


Route::middleware([AuthenticateMiddleware::class])->group(function(){
    Route::prefix('users')->group(function(){
        Route::get('/',[AuthController::class,'user'])->name('auth.user');
        Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');
        // Route::get('/register',[AuthController::class,'register'])->name('auth.register');
    });
});


Route::get('/register',[AuthController::class,'register'])->name('auth.register');
Route::post('/register',[AuthController::class,'storeUser'])->name('auth.storeUser');


Route::get('/login',[AuthController::class,'index'])->name('auth.login');
Route::post('/login',[AuthController::class,'check'])->name('auth.check');

// Route::get('user/profile',[AuthController::class,'getProfile'])->name('auth.profile');

Route::get('profile',[ProfileController::class,'index'])->name('user.profile');

Route::middleware([AuthenticateMiddleware::class])->group(function(){
    Route::prefix('blogs')->group(function(){
        Route::get('/',[BlogController::class,'index'])->name('blog.index');
        Route::get('/create',[BlogController::class,'create'])->name('blog.create');
        Route::post('/store',[BlogController::class,'store'])->name('blog.store');
        Route::get('/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
        Route::put('/update/{id}',[BlogController::class,'update'])->name('blog.update');
        Route::delete('/delete/{id}',[BlogController::class,'destroy'])->name('blog.destroy');
    });
});

Route::middleware([AuthenticateMiddleware::class])->group(function(){
    Route::prefix('showrooms')->group(function(){
        Route::get('/',[ShowroomController::class,'index'])->name('showrooms.index');
        Route::get('/show/{id}',[ShowroomController::class,'show'])->name('showrooms.show');
        Route::get('/create',[ShowroomController::class,'create'])->name('showrooms.create');
        Route::post('/store',[ShowroomController::class,'store'])->name('showrooms.store');
        Route::get('/edit/{id}',[ShowroomController::class,'edit'])->name('showrooms.edit');
        Route::put('/update/{id}',[ShowroomController::class,'update'])->name('showrooms.update');
        Route::delete('/delete/{id}',[ShowroomController::class,'destroy'])->name('showrooms.destroy');
    });
});

