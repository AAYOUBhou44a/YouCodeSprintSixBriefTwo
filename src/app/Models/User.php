<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'age',
        'phone',
        'classe_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function classe(){
        return $this->belongsTo(Classe::class);
    }

    // public function evaluations(){
    //     return $this->hasMany(Evaluation::class);
    // }

    public function realisations(){
        return $this->hasMany(Realisation::class, 'classe_id');
    }

    public function evaluations(){
        return $this->hasManyThrough(
        Evaluation::class,  // OÙ je veux aller ?
        Realisation::class, // PAR OÙ je passe ?
        'student_id',       // Comment le "Pont" me reconnaît ? (Clé dans Realisation)
        'realisation_id'    // Comment la "Destination" reconnaît le pont ? (Clé dans Evaluation)
    );
    }

// /**
//      // HELPER : Vérifier si l'utilisateur est un étudiant
//      
//     public function isStudent(): bool
//     {
//         return $this->role === 'student';
//     }

//     /**
//      // HELPER : Vérifier si l'utilisateur est un formateur
//      
//     public function isTeacher(): bool
//     {
//         return $this->role === 'teacher';
//     }

}
