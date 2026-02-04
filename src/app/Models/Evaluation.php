<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'brief_id',
        'student_id',
        'comment'
    ];

    public function brief(){
        return $this->belongsTo(Brief::class);
    }

    public function student(){
        return $this->belongsTo(User::class);
    }

    public function skills(){
        return $this->belogsToMany(Skill::class, 'evaluation_skills')->withPivot('level_id', 'validation');
    }

    // public function skills(){
    //     return $this->belongsToMany(Skill::class, 'evaluation_skills')
    //     // Le rôle de 'evaluation_skills' dans ta fonction est de désigner la table de stockage 
    //     // qui contient les clés étrangères et ton champ level. C'est le "connecteur" physique de ta base de données.
    //     ->using(EvaluationSkill::class)
    //     ->withPivot('level');
    //     // ces deux derniers lignes nous permet d'utiliser 'level' qui fait partie de la table de liaison et pas de l'un des deux tableaux 
    // }
}

