<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            // 'role' => $this->faker->randomElement(['', '', ''])
            'age' => $this->faker->numberBetween(18, 35),
            'phone' => $this->faker->numerify('06########'),
            // Sélectionne l'ID d'un Sprint au hasard parmi ceux qui existent déjà
            'classe_id' => \App\Models\Classe::all()->random()->id,
             // Crée un classe tout neuf automatiquement
            // 'sprint_id' => \App\Models\Sprint::factory()
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
