<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('it_IT');

        foreach (range(1, 50) as $index) {
            DB::table('trains')->insert([
                'azienda' => $faker->company,
                'stazione_di_partenza' => $faker->city,
                'stazione_di_arrivo' => $faker->city,
                'orario_di_partenza' => $faker->dateTimeBetween('now', '+1 week'),
                'orario_di_arrivo' => $faker->dateTimeBetween('+1 hour', '+2 weeks'),
                'codice_treno' => strtoupper(Str::random(5)),
                'numero_carrozze' => $faker->numberBetween(5, 20),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean(false),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
