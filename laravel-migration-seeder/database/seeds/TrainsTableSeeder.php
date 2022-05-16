<?php
use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;



class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->company_name =$faker->words(1 , true);
            $newTrain->departures_station = $faker->city();
            $newTrain->arrivals_station = $faker->city();
            $newTrain->departures_time = $faker->dateTime();
            $newTrain->arrivals_time = $faker->dateTime();
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->number_of_carriages = $faker->randomDigit();
            $newTrain->is_in_time = $faker->boolean();
            $newTrain->is_deleted = $faker->boolean();
            $newTrain->departures_date = $faker->dateTime();
            $newTrain->save();
        } 
        
    }
}
