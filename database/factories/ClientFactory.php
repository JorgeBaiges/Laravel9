<?php

namespace Database\Factories;
use App\Models\Client;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "DNI" => $this->faker->bothify('########?'),
            "Nombre" => $this->faker->firstName(),
            "Apellidos" => $this->faker->lastName(),
            "Telefono" => $this->faker->phoneNumber(),
            "Email" => $this->faker->email()
        ];
    }
}
