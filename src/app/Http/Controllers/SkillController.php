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

        return $skill ? redirect()->route('create-user') : back();
    }
}
