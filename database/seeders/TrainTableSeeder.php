<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->randomElement(['Trenitalia', 'LondonExpress', 'HdTrains']);
            $newTrain->st_start = $faker->city();
            $newTrain->st_arrive = $faker->city();
            $newTrain->time_start = $faker->time();
            $newTrain->time_arrive = $faker->time();
            $newTrain->code_train = $faker->bothify('???###');
            $newTrain->wagons = $faker->numberBetween(2, 12);
            $newTrain->on_hour = $faker->numberBetween(0, 1);
            $newTrain->cancel = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
