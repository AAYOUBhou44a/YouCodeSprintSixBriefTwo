<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/submitLogin', [AuthController::class, 'submitLogin']);

Route::get('/create-user', function(){
    return view('admin.create-user');
})->name('create-user');

Route::get('/create-brief', function(){
    return view('teacher.create-brief');
})->name('create-brief');

Route::get('/briefs', function(){
    return view('student.briefs');
})->name('student-briefs');