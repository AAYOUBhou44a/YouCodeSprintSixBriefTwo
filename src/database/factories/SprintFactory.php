<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sprint>
 */
class SprintFactory extends Factory
{
    protected $model = \App\Models\Sprint::class;
    // En PHP, pour désigner une classe comme une valeur, tu dois ajouter ::class.
    //  Sans cela, PHP croit que tu cherches une constante nommée Sprint dans le namespace \App\Models
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'start_date' => now(),
            'end_date' => now()->addDays(15)
        ];
    }
}
