<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BriefController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\SprintController;

// Mettre une fonction de vue (return view(...)) dans le web.php est toléré uniquement 
// pour des pages extrêmement simples qui n'ont aucune donnée

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// on a les memes liens mais les méthodes sont défférents 
Route::post('/login', [AuthController::class, 'submitLogin']);


Route::middleware('auth')->group(function(){
    Route::middleware('can:admin_only')->group(function(){
        // __ ESPACE ADMIN __ 
    
        // __ CLASSES __ 
        Route::get('/classes/create', [ClasseController::class, 'create'])->name('admin.classes.create');
        
        Route::post('/classes', [ClasseController::class, 'store']);
        
        
        // __ USERS __
        Route::get('/users/create', function(){
            return view('admin.users.create');
        })->name('admin.users.create');
        
        Route::post('/users', [AuthController::class, 'store']);
        
        // __ SPRINTS __ 
        Route::get('/sprints/create', function(){
            return view('admin.sprints.create');
        })->name('admin.sprints.create');
        
        Route::post('/sprints', [SprintController::class, 'store']);
        
        // __ SKILLS __ 
        Route::get('/skills/create', function(){
            return view('admin.skills.create');
        })->name('admin.skills.create');
        
        Route::post('/skills', [SkillController::class, 'store']);
        
    });
    Route::middleware('can:teacher_only')->group(function(){
        // __ ESPACE TEACHER __ 
        Route::get('/briefs/create', [BriefController::class, 'create'])->name('teacher.briefs.create');
        
        // Route::get('/briefs/create', function(){
        //     return view('teacher.briefs.create');
        // })->name('teacher.briefs.create');
        
        Route::post('/teacher/briefs', [BriefController::class, 'store']);
        // Route::get('/briefs/create', [BriefController::class, 'create'])->name('teacher.briefs.create');
        
    });
    
    // __ ESPACE STUDENT __ 
    Route::get('/briefs', [BriefController::class, 'index'])->name('student.briefs.index')->middleware('can:student_only');
    // Route::get('briefs/store', function(){
    //     return view('student.briefs.submit');
    // })->middleware('can:student_only');

    Route::get('/brief/show/{id}', [BriefController::class, 'show']); //on n'utilise pas {{id}}
    Route::post('/brief/submit', [BriefController::class, 'submit']);
});
