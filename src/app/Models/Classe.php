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
}
