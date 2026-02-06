<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BriefSkill extends Pivot
{
    use HasFactory;

    protected $table = 'brief_skills';
    protected $fillable = [
        'brief_id',
        'skill_id',
        'level'
    ];

    // Question::where('title', 'like', 'a%');
    // par defaut si on a pas met like , on audra  = 
}
