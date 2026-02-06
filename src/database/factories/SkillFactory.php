<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    protected $model = \App\Models\Skill::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // numerify remplace chaque symbole # par un chiffre aléatoire.
            // Génère quelque chose comme "B2-9" ou "X5-1"
            // 'id_special' => $this->faker->bothify('??-#'),
            // 'name' => 'Sprint_' . $this->faker->numberBetween(1, 10),
            'code' => $this->faker->unique()->numerify('C#'),
            'title' => $this->faker->sentence(5)
        ];
    }
}
