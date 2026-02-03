<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'type',
        'sprint_id',
        'class_id',
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

    public function evaluations(){
        return $this->hasMany(Evaluation::class);
    }
}
