<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BriefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = \App\Models\Skill::all();
        \App\Models\Brief::factory(21)->create()->each(function ($brief) use ($skills){
            // On choisit 2 compétences au hasard parmi toutes celles du projet
            $randomSkills = $skills->random(rand(2, 3));

            foreach($randomSkills as $skill){
                $brief->skills()->attach($skill->id, [
                    'level' => fake()->randomElement(['IMITER', 'S_ADAPTER', 'TRANSPOSER'])
                ]);
            }
        });
    }
}
