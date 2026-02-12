<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealisationController extends Controller
{
    public function index(){
        // realisation->brief_id->classe_id = Auth:user()->classe_id
        
        // methode join : 
        // $realisations = Realisation::select('realisations.*')
        // ->join('briefs', 'briefs.id', '=', 'realisations.brief_id')
        // ->where('briefs.classe_id', Auth::user()->classe_id)
        // ->with(['brief', 'student'])->get();

        $realisations = Realisation::whereHas('brief', function($brief){  // whereHas('brief'): nous donnent juste les réalisations qui ont un brief
            $brief->where('classe_id', Auth::user()->classe_id);//$query représente la table briefs
        })->with(['brief.skills', 'student'])->latest()->get(); //brief avec with et avec whereHas fait reference au classe mais il ne sont pas les memes 

        return view('teacher.realisations.index', compact('realisations'));
    }

    public function show($id){
        $realisation = Realisation::with(['brief', 'student'])
        ->where('id', $id)->first();

        return view('teacher.realisations.show', compact('realisation'));
    }
}
