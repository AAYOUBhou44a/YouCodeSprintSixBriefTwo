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

        return back();
    }
}
