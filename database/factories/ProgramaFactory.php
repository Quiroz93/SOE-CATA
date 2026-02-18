<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Programa>
 */
class ProgramaFactory extends Factory
{
    /**
     * Estado publicado
     */
    public function publicado(): static
    {
        return $this->state(fn () => ['estado' => 'publicado']);
    }

    /**
     * Estado borrador
     */
    public function borrador(): static
    {
        return $this->state(fn () => ['estado' => 'borrador']);
    }

    /**
     * Estado inactivo
     */
    public function inactivo(): static
    {
        return $this->state(fn () => ['estado' => 'inactivo']);
    }

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
