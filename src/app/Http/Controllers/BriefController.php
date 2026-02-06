<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Sprint;
use Illuminate\Http\Request;

class BriefController extends Controller
{
    public function create(){
        $sprints = Sprint::all();
        $skills = Skill::all();

        return view('teacher.briefs.create', compact('sprints', 'skills'));
    }

    public function store(){
        
    }
}
