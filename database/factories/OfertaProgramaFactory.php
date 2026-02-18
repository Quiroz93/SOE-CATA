<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OfertaPrograma>
 */
class OfertaProgramaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'oferta_id' => \App\Models\Oferta::factory(),
            'programa_id' => \App\Models\Programa::factory(),
            'cupos' => $this->faker->numberBetween(10, 100),
            'estado' => $this->faker->randomElement(['activo', 'inactivo']),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
        ];
    }
}
