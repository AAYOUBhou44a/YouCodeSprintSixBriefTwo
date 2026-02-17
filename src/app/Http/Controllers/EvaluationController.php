<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evaluation;
use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Models\EvaluationSkill;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EvaluationRequest;

class EvaluationController extends Controller
{
    public function store(EvaluationRequest $request){
        $realisation_id = $request->realisation_id;
        $comment = $request->comment;
        $evaluation = Evaluation::create([
            'realisation_id' => $realisation_id,
            'comment' => $comment
        ]);
        $realisation = Realisation::where('id', $realisation_id)->update([
            'status' => 'evaluated'
        ]);

        // $cles = array_keys($monTableau);
        // $valeurs = array_values($monTableau);
        foreach($request->validation as $skill_id => $validation){
            EvaluationSkill::create([
                'skill_id' => $skill_id,
                'validation' => $validation,
                'level' => 'IMITER',
                'evaluation_id' => $evaluation->id
            ]);
        }

        return redirect()->route('realisations');
    }


    public function index(){
        // $evaluations = Evaluation::with(['realisation.student', 'realisation.brief', 'skills'])
        // ->whereHas('realisation.student', function($query){
        //     $query->where('id', Auth::user()->id);
        // })->get();

        // Auth::user() c'est l'utilisateur connecté maitenanat 
        // load() : C'est l'équivalent de with(), mais pour un objet déjà existant
        $evaluations = Auth::user()->load('evaluations.realisation.brief', 'evaluations.skills')->evaluations;
        return view('student.evaluations.index', compact('evaluations'));
    }

    public function show($id){
        $evaluation = Evaluation::where('id', $id)->with(['realisation.brief', 'skills', 'realisation.student'])->first();
        // Ajoutez ->first() ou ->findOrFail($id) à la fin
        return view('student.evaluations.show', compact('evaluation'));
    }

    
}
