<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Faker\Generator as Faker;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i <= 20; $i++) {

            $flight = new Flight();

            $flight->azienda = $faker->words(2, true);
            $flight->aeroporto_di_partenza = $faker->city();
            $flight->aeroporto_di_arrivo = $faker->city();
            $flight->orario_di_partenza = $faker->dateTimeBetween('now', '+1 day');
            $flight->orario_di_arrivo = $faker->dateTimeBetween('now', '+1 day');
            $flight->codice_volo = $faker->unique()->numerify('Flight###');
            $flight->numero_passeggeri = $faker->numberBetween(50, 150);
            $flight->in_orario = $faker->boolean();
            $flight->cancellato = $faker->boolean();

            $flight->save();
        }
    }
}
