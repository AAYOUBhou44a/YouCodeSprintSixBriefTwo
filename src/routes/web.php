<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BriefController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\SprintController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\RealisationController;

// Mettre une fonction de vue (return view(...)) dans le web.php est toléré uniquement 
// pour des pages extrêmement simples qui n'ont aucune donnée

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/logout', [AuthController::class, 'logout']);

// on a les memes liens mais les méthodes sont défférents 
Route::post('/login', [AuthController::class, 'submitLogin']);


Route::middleware('auth')->group(function(){
    Route::middleware('can:admin_only')->group(function(){
        // __ ESPACE ADMIN __ 
    
        // __ CLASSES __ 
        Route::get('/classes/create', [ClasseController::class, 'create'])->name('admin.classes.create');
        
        Route::post('/classes', [ClasseController::class, 'store']);
        
        Route::get('/classes', [ClasseController::class, 'index'])->name('classes.index');
        
        // __ USERS __
        Route::get('/users/create', function(){
            return view('admin.users.create');
        })->name('users.create');
        
        Route::post('/users', [AuthController::class, 'store']);

        Route::get('/users', [UserController::class, 'index'])->name('users.index');

        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

        Route::get('/users/edit/{user}', [UserController::class , 'edit']);

        Route::put('/users/{user}', [UserController::class, 'update']);
        
        // __ SPRINTS __ 
        Route::get('/sprints/create', function(){
            return view('admin.sprints.create');
        })->name('admin.sprints.create');
        
        Route::post('/sprints', [SprintController::class, 'store']);

        Route::get('/sprints', [SprintController::class, 'index'])->name('sprints.index');
        
        // __ SKILLS __ 
        Route::get('/skills/create', [SkillController::class, 'create'])->name('admin.skills.create');
        
        Route::post('/skills', [SkillController::class, 'store']);

        Route::get('skills', [SkillController::class, 'index']);
        
    });
    Route::middleware('can:teacher_only')->group(function(){
        // __ ESPACE TEACHER __ 
        Route::get('/briefs/create', [BriefController::class, 'create'])->name('teacher.briefs.create');
        
        Route::post('/teacher/briefs', [BriefController::class, 'store']);
        // Route::get('/briefs/create', [BriefController::class, 'create'])->name('teacher.briefs.create');
        
        // __ evaluation par le formateur__ 
        Route::get('/realisations', [RealisationController::class, 'index'])->name('realisations');
        Route::get('/realisations/show/{id}', [RealisationController::class, 'show']);
        Route::post('/evaluation', [EvaluationController::class, 'store']);
    });
    
    Route::middleware('can:student_only')->group(function(){

        // __ ESPACE STUDENT __ 
    
        // __ les briefs que l'étudiant peut voir
        Route::get('/briefs', [BriefController::class, 'index'])->name('student.briefs.index')->middleware('can:student_only');
        Route::get('/briefs/brief/{id}', [BriefController::class, 'brief']);
       
    
        // __ Soummission d'un brief par l'étudiant __ 
        Route::get('/brief/show/{id}', [BriefController::class, 'show']); //on n'utilise pas {{id}}
        Route::post('/brief/submit', [BriefController::class, 'submit']);
        
        // __ Evaluations que l'étudiant peut voir __ 
        Route::get('/evaluations', [EvaluationController::class, 'index']);
        Route::get('/evaluations/show/{id}', [EvaluationController::class, 'show']);
    });

});
