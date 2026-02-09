<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    $fillable = [
        'brief_id',
        'student_id',
        'link',
        'commentaire',
        'evaluation_id',
        'evaluation'
    ]

    public function brief(){
        return $this->belongsTo(Brief::class);
    }
    public function student(){
        return $this->belongsTo(User::class);
    }
    public function evaluation(){
        return $this->belongsTo(Evaluation::class);
    }
}
