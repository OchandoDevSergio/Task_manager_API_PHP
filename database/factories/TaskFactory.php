<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            // 'customer_id' => Customer::factory(),
            // 'status' => $this->faker->email(),
            // 'description' => $this->faker->text(10),
        ];
    }
}
