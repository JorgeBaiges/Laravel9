<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Study>
 */
class StudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            "name" => $this->faker->randomElement(["BBDD", "PROGR","FOL"]),
            "code" => $this->faker->randomElement(["IFC301","IFC302","IFC303","IFC304"]),
            "family" => $this->faker->randomElement(["Informatica","Empresa"]),
            "level" => $this->faker->randomElement(["GM","GS"])

        ];
    }
}
