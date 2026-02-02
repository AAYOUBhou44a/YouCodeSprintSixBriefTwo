<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EvaluationSkill extends Pivot
{
    protected $table = 'evaluation_skills';
    protected $fillable = [
        'evaluation_id',
        'skill_id',
        'level'
    ];
}
