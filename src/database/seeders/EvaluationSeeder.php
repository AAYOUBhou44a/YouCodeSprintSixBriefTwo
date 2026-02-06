<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = \App\Models\Skill::all();
        // On suppose que tu as une table 'levels' ou que tu utilises des IDs de niveaux
        $levelIds = [1, 2, 3]; 

        \App\Models\Evaluation::factory(80)->create()->each(function ($evaluation) use ($skills, $levelIds) {
            // On choisit 3 compétences au hasard pour cette évaluation
            $randomSkills = $skills->random(3);

            foreach ($randomSkills as $skill) {
                // Liaison via la table pivot avec données supplémentaires
                $evaluation->skills()->attach($skill->id, [
                    'level_id' => fake()->randomElement($levelIds),
                    'validation' => fake()->boolean(70), // 70% de chances d'être validé
                ]);
            }
        });
    }
}
