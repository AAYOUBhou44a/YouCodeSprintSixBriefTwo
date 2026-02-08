<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title'
    ];

    public function evaluations(){
        return $this->belongsToMany(Evaluation::class, 'evaluation_skills')
        ->using(EvaluationSkill::class)
        ->withPivot('level');
    }

    public function briefs(){
        return $this->belogsToMany(Brief::class, 'brief_skills')->withPivot('level');
    }

}
