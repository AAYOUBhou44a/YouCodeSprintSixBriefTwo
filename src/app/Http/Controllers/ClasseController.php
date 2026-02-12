<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classe;
use Illuminate\Http\Request;
use App\Http\Requests\ClasseRequest;

class ClasseController extends Controller
{
    public function create(){
        $students = User::where('role', 'student')->whereNull('classe_id')->get(['id', 'name', 'email']);
        $teachers = User::where('role', 'teacher')->whereNull('classe_id')->get(['id', 'name']);
        return view('admin.classes.create', compact('students', 'teachers'));
    }

    public function store(ClasseRequest $request){
        $classe = Classe::create([
            'name' => $request->name,
            'teacher_id' => $request->teacher_id
        ]);

// Lorsque vous exécutez $classe = Classe::create([...]), Laravel fait deux choses :
// Il envoie la requête INSERT à SQL.
// Il récupère immédiatement l'objet créé pour que vous puissiez l'utiliser 
// tout de suite (par exemple pour récupérer son ID ou sa date de création).

        // foreach($request->student_ids as $student_id) {
        //     User::where('id', $student_id)->update([
        //         'classe_id' => $classe->id
        //     ]);
        // }
        // En PHP, on écrit foreach($tableau as $element)
        $updateStudents = User::whereIn('id', $request->student_ids)->update([
            'classe_id' => $classe->id
            // $classe->id : $classe est la classe crée au dessus 
        ]);

        $updateTeacher = User::where('id', $request->teacher_id)->update(['classe_id' => $classe->id]);

        return redirect()->route('classes.index');
    }

    public function index(){
        $classes = Classe::with('teacher')->withCount('students')->get();
        // pour afficher les étudiant obtenu par withCount , on utilise $classe->students_count : on ajoute _count à students 

        return view('admin.classes.index', compact('classes'));
    }
}
