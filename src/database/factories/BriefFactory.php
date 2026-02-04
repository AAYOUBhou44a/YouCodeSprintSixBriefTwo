<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brief>
 */
class BriefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title' => $this->faker->sentence(3),
        'description' => $this->faker->text(34),
        'content' => $this->faker->text(180),
        'type' => $this->faker->randomElement(['individuel', 'collectif']),
        'sprint_id' => \App\Models\Sprint::create()->random()->id,
        // 'sprint_id' => \App\Models\Sprint::create()->random()->id(), false
        'classe_id' => \App\Models\Classe::create()->random()->id(),
        'start_date' => now(),
        // 'start_date' => $this->faker->now(), false
        'end_date' => now()->addDays(10)
        ];
    }
}
