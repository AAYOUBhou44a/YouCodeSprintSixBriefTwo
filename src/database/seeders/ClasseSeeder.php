<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Classe::factory(1)->create(['teacher_id' => 101]);
        \App\Models\Classe::factory(1)->create(['teacher_id' => 102]);
        \App\Models\Classe::factory(1)->create(['teacher_id' => 103]);
        \App\Models\Classe::factory(1)->create(['teacher_id' => 104]);
        \App\Models\Classe::factory(1)->create(['teacher_id' => 105]);
        \App\Models\Classe::factory(1)->create(['teacher_id' => 106]);
    }
}
