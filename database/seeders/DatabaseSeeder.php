<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Historical;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User();
        $user->name = "Eric";
        $user->last_names = "Valenzuela Rojas";
        $user->email = "Eric@gmail.com";
        $user->save();

        $user2 = new User();
        $user2->name = "Martin";
        $user2->last_names = "Mella Carrasco";
        $user2->email = "Martin@gmail.com";
        $user2->save();

        $vehicle = new Vehicle();
        $vehicle->brand = "Toyota";
        $vehicle->model = "RAV4 HYBRID";
        $vehicle->year = 2019;
        $vehicle->user_id = $user2->id;
        $vehicle->price = 11000000;
        $vehicle->save();

        $historical = new Historical();
        $historical->user_id = $user->id;
        $historical->vehicle_id = $vehicle->id;
        $historical->save();
    }
}
