<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
{
    public function store(SkillRequest $request){
        $skill = Skill::create([
            'code' => $request->code,
            'title' => $request->title
        ]);

        return back();
    }

    public function create(){
        $skills = Skill::oldest()->get();

        return view('admin.skills.create', compact('skills'));
    }

    public function destroy(Skill $skill){
        $skill->delete();
        return back()->with('success', 'Compétence supprimé avec succès');
    }

    public function edit(Skill $skill){

        $skills = Skill::oldest()->get();

        return view('admin.skills.create', compact('skill', 'skills'));
    }

    public function update(SkillRequest $request, Skill $skill){
        $data = $request->validated();

        $skill->update($data);

        return back()->with('success', 'Compétence met à jour avec succès');
    }
}

