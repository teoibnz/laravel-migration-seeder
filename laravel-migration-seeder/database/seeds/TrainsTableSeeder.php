<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;


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
            $newTrain->save();
        } 
        
    }
}
