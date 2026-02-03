<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'code',
        'title'
    ];

    public function evaluations(){
        return $this->belongsToMany(Evaluation::class, 'evaluation_skills')
        ->using(EvaluationSkill::class)
        ->withPivot('level');
    }

}
