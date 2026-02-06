<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory; // <--- Utilisation indispensable

    protected $fillable = [
        'name',
        'start_date',
        'end_date', 
        // 'description'
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'datetime',
            'end_date' => 'datetime'
        ];
    }

    public function briefs(){
        return $this->hasMany(Brief::class);
    }
}
