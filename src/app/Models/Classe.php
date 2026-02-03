<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'name',
        'teacher_id'
    ];

    public function students(){
        return $this->hasMany(User::class);
    }
}
