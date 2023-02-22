<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
     
/**  
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */  
class OrderFactory extends Factory
{    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            "solicitante" => $this->faker->name(),
            "fecha" => $this->faker->dateTime(),
            "descripcion" => $this->faker->text(),       
            "client_id" => Client::inRandomOrder()->first()->id,
     
        ];
    }
}