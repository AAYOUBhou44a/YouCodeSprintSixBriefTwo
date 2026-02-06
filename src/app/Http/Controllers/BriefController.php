<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use App\Models\Skill;
use App\Models\Sprint;
use App\Models\BriefSkill;
use Illuminate\Http\Request;
use App\Http\Requests\BriefRequest;
use Illuminate\Support\Facades\Auth;

class BriefController extends Controller
{
    public function create(){
        $sprints = Sprint::all();
        $skills = Skill::all();

        return view('teacher.briefs.create', compact('sprints', 'skills'));
    }

    public function store(BriefRequest $request){
        // cela ignore tous les champs malveillants qu'un utilisateur pourrait tenter d'injecter dans ta requête.
        $request = $request->validated();
        $brief = Brief::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'type' => $request->type,
            'sprint_id' => $request->sprint_id,
            'classe_id' => Auth::user()->class_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date 
        ]);
        // $briefSkill = BriefSkill::whereIn('id', $request->skill_ids)->create([
        //     'brief_id' => $brief->id,
        //     'skill_id' => $skill_id,
        //     'level' => $request->level[$skill_id]
        // ]);
        foreach($request->skill_ids as $skill_id){
            BriefSkill::create([
                'brief_id' => $brief->id,
                'skill_id' => $skill_id,
                'level' => $request->level[$skill_id]
            ]);
        }
    }
}
