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
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();

                $newTrain->company = substr($faker->company, 0, 20);
                $newTrain->departure_station = $faker->city;
                $newTrain->arrival_station = $faker->city;
                $newTrain->departure_time = $faker->time('H:i:s');
                $newTrain->arrival_time = $faker->time('H:i:s');
                $newTrain->train_code = $faker->unique()->regexify('[A-Z0-9]{5}');
                $newTrain->carriages_count = $faker->numberBetween(5, 15);
                $newTrain->on_time = $faker->boolean;
                $newTrain->canceled = $faker->boolean(10);

            $newTrain->save();
        }
    }
}
