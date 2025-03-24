<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

        $newTrain->company = $faker->company;
        $newTrain->departure_station = $faker->city;
        $newTrain->arrival_station = $faker->city;
        $newTrain->departure_time = $faker->time;
        $newTrain->arrival_time = $faker->time;
        $newTrain->total_carriage = $faker->numberBetween(1, 10);
        $newTrain->train_code = $faker->numberBetween(1000, 9999);
        $newTrain->on_time = $faker->boolean;
        $newTrain->cancelled = $faker->boolean;

            $newTrain->save();
            }
    }
}
