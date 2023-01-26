<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Order::factory()
        ->count(22)
        ->create();

        Client::factory()
        ->count(22)
        ->create()->each(function($client) {

            $client->orders()->sync(

                Order::all()->random(4)

            );

        });


    }
}
