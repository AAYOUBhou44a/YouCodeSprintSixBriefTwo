<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'teacher_id'
    ];

    public function students(){
        return $this->hasMany(User::class);
    }

    public function briefs(){
        return $this->hasMany(Brief::class);
    }

    // Si vous avez nommé votre fonction teacher(), Laravel va
    //  chercher par défaut une colonne nommée teacher_id dans votre table classes.
    // Argument 1 : Le modèle cible
    // Argument 2 : La clé étrangère dans la table 'classes'
    public function teacher(){
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
