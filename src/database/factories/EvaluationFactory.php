<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brief_id' => \App\Models\Brief::all()->random()->id,
            'student_id' => \App\Models\Student::all()->unique()->random()->id,
            'comment' => $this->faker->paragraph()
        ];
    }
}
