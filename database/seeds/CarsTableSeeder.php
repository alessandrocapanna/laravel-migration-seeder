<?php

use Illuminate\Database\Seeder;
use App\Car;
use Faker\Generator as Faker;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($car=0; $car < 10; $car++) {
          $new_car = new Car();
          $new_car->modello = $faker->randomElement(['fiat-punto', 'ford-fiesta' , 'alfa-mito' , 'bmw-x3' , 'triciclo-pedali' , 'tacco-sola']);
          $new_car->targa = $faker->numberBetween(100000,300000);
          $new_car->km = $faker->numberBetween(1500,300000);
          $new_car->carburante = $faker->randomElement(['benzina' , 'diesel' , 'benzina-glp' , 'benzina-metano']) ;
          $new_car->save();
        }
    }
}
