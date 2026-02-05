<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SprintController;

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/submitLogin', [AuthController::class, 'submitLogin']);


Route::get('/create-classe', function(){
    return view('admin.create-classe');
})->name('create-classe');

Route::get('/create-user', function(){
    return view('admin.create-user');
})->name('create-user');

Route::post('/submit-user', [AuthController::class, 'submitUser']);

Route::get('/create-sprint', function(){
    return view('admin.create-sprint');
})->name('create-sprint');

Route::post('/submitSprint', [SprintController::class, 'submitSprint']);


Route::get('/create-brief', function(){
    return view('teacher.create-brief');
})->name('create-brief');

Route::get('/briefs', function(){
    return view('student.briefs');
})->name('student-briefs');
