<?php

namespace App\Http\Controllers;

use App\Models\Sprint;
use Illuminate\Http\Request;
use App\Http\Requests\SprintRequest;

class SprintController extends Controller
{
    public function store(SprintRequest $request){
        $created = Sprint::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        return redirect()->route('sprints.index');
    }

    public function index(){
        $sprints = Sprint::oldest()->get();

        return view('admin.sprints.index', compact('sprints'));
    }

    public function destroy(Sprint $sprint){

        $sprint->delete();

        return back()->with('success', 'sprint supprimé avec succès');
    }

    public function edit(Sprint $sprint){

        return view('admin.sprints.create', compact('sprint'));
    }

    public function update(SprintRequest $request,Sprint $sprint){
        $data = $request->validated();
        $sprint->update($data);
        return redirect()->route('sprints.index')->with('success', 'sprint mis à jour avec succès');
    }
}
