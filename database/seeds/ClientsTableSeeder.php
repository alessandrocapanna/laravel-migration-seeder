<?php

use Illuminate\Database\Seeder;
use App\Client;
use Faker\Generator as Faker;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($client=0; $client < 5; $client++) {
        $new_client = new Client();

        $new_client->nome = $faker->firstName();
        $new_client->cognome = $faker->lastName();
        $new_client->iban_carta = $faker->iban();

        $new_client->save();
      }
    }
}
