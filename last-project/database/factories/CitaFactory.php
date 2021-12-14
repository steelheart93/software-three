<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cc' => $this->faker->isbn10(),
            'nombre' => $this->faker->name(),
            'eps' => $this->faker->company(),
            'fecha_cita' => $this->faker->dateTime(),
            'tipo_cita' => $this->faker->randomElement(["primera_dosis", "segunda_dosis", "informativa", "prueba_covid"]),
        ];
    }
}
