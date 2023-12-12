<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            // Para generar automáticamente con faker descomentar
            // 'name' => $this->faker->name(),
            // 'surnames' => $this->faker->name(),
            // 'email' => $this->faker->email(),

        ];
    }
}
