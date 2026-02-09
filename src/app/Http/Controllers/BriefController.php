<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use App\Models\Skill;
use App\Models\Sprint;
use App\Models\BriefSkill;
use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Http\Requests\BriefRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RealisationRequest;

class BriefController extends Controller
{
    public function create(){
        $sprints = Sprint::all();
        $skills = Skill::all();

        return view('teacher.briefs.create', compact('sprints', 'skills'));
    }

    public function store(BriefRequest $request){
        // cela ignore tous les champs malveillants qu'un utilisateur pourrait tenter d'injecter dans ta requête.
        $data  = $request->validated(); // $data ici devient un tableau associative , mais $requet est un objet
        $brief = Brief::create($data);
        
        foreach($data['skill_ids'] as $skill_id){
            BriefSkill::create([
                'brief_id' => $brief->id,
                'skill_id' => $skill_id,
                'level' => $data['level'][$skill_id]
            ]);
        }
        
        return back();
    }

    public function index(){
        $classe_id = Auth::user()->classe_id;
        $latestBrief = Brief::latest()->where('classe_id', $classe_id)->with(['sprint', 'skills'])->first();
        $briefs = collect();
        if($latestBrief){
            $briefs = Brief::latest()->where('classe_id', $classe_id)->where('id', '!=', $latestBrief->id)->get();
        }
            return view('student.briefs.index', compact('latestBrief', 'briefs'));
    }

    public function show($id){
        $brief = Brief::with(['sprint', 'skills'])->where('id', $id)->first();

        return view('student.briefs.submit', compact('brief'));
    }

    public function submit(RealisationRequest $request){
        $data = $request->validated();
        $realisation = Realisation::create($data);
        return back();
    }
}
