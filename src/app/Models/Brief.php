<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brief extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'type',
        'sprint_id',
        'classe_id',
        'start_date',
        'end_date'
    ];

//     L'utilité de casts() pour les dates
// Par défaut, lorsqu'une base de données renvoie une date, Laravel la reçoit sous forme de chaîne de caractères (ex: "2026-02-02 20:00:00")

    protected function casts(): array
    {
        return [
            'start_date' => 'datetime',
            'end_date' => 'datetime'
        ];
    }

    public function sprint(){
        return $this->belongsTo(Sprint::class);
    }

    public function classe(){
        return $this->belongsTo(Classe::class);
    }

    public function realisations(){
        return $this->hasMany(Realisation::class);
    }
    // public function evaluations(){
    //     return $this->hasMany(Evaluation::class);
    // }

    public function skills(){
        return $this->belongsToMany(Skill::class, 'brief_skills')->withPivot('level');
    }
}
