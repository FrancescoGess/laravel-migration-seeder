<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->time('H:i'),
                'orario_arrivo' => $faker->time('H:i'),
                'codice_treno' => $faker->unique()->ean8,
                'numero_carrozze' => $faker->numberBetween(5, 15),
                'in_orario' => $faker->boolean(70),
                'cancellato' => $faker->boolean(10),
            ]);
        }
    }
}
