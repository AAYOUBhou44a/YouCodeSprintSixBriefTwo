<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BriefSkill extends Pivot
{
    protected $table = 'brief_skills';
    protected $fillable = [
        'brief_id',
        'skill_id',
        'level'
    ];
}
