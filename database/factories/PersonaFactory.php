<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->unique()->numberBetween(0000000000, 9999999999),
            'nombres' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'edad' => $this->faker->numberBetween(18, 99),
        ];
    }
}
