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
        
        return redirect()->route('student.briefs.index')->with('success', 'Brief ajouté avec succès');
    }

    public function index(){
        $classe_id = Auth::user()->classe_id;
        $latestBrief = Brief::latest()->where('classe_id', $classe_id)->with(['sprint', 'skills', 'realisations' => function($query){
            $query->where('student_id', Auth::id());
        }])->first();
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

    public function brief($id){
        $brief = Brief::with(['sprint', 'skills', 'classe.teacher', 'realisations' => function($query){
            $query->where('student_id', Auth::id());
        }])
        ->findOrFail($id);
        // Le brief s'affiche même si l'étudiant n'a pas encore rendu son travail (pas de whereHas
        //with renvoie toujours une colluctin meme vide 

        return view('student.briefs.show', compact('brief'));
    }

    public function destroy(Brief $brief){
        $brief->delete();
        return back()->with('success', 'Brief supprimé avec succès');
    }

    public function edit(Brief $brief){
        $brief = Brief::with('skills', 'sprint')->where('id', $brief->id)->first();
        $sprints = Sprint::oldest()->get();
        return view('teacher.briefs.create', compact('brief', 'sprints'));
    }



//     public function update(BriefRequest $request, Brief $brief)
// {
//     $data = $request->validated();
//     $brief->update($data);

//     $syncData = [];
//     foreach ($data['skill_ids'] as $skill_id) {
//         // On construit un tableau associatif : [id_du_skill => ['colonne_pivot' => 'valeur']]
//         $syncData[$skill_id] = [
//             'level' => $data['level'][$skill_id]
//         ];
//     }

//     // On utilise sync() pour tout gérer en une seule fois
//     $brief->skills()->sync($syncData);

//     return redirect()->route('briefs.index')->with('success', 'Brief mis à jour');
// }




    // public function update(BriefRequest $request, Brief $brief){
    //     $data = $request->validated();

    //     $brief->update($data);

    //     $breifWithSkills = [];
    //     foreach($data['skill_ids'] as $skill_id){
    //         $briefWithSkills = [
    //             'brief_id' => $brief->id,
    //             'skill_id' => $skill_id,
    //             'level' => $data['level'][$skill_id]
    //         ];
    //     }

    //     $brief->skills()->sync($briefWithSkills); //sync (synchronize) pas async 

    // }



    public function update(BriefRequest $request, Brief $brief){
        $data = $request->validated();

        $brief->update($data);

        BriefSkill::where('brief_id', $brief->id)->delete();

        foreach($data['skill_ids'] as $skill_id){
                BriefSkill::create([
                'brief_id' => $brief->id,
                'skill_id' => $skill_id,
                'level' => $data['level'][$skill_id]
            ]);
        }
        return redirect()->route('student.briefs.index')->with('success', 'Brief met à jour avec succès');

    }
}
