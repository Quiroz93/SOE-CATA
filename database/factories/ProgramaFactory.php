<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Programa>
 */
class ProgramaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->sentence(2),
            'codigo' => $this->faker->unique()->bothify('PRG###'),
            'descripcion' => $this->faker->paragraph(),
            'estado' => $this->faker->randomElement(['borrador', 'publicado', 'inactivo']),
        ];
    }
}
