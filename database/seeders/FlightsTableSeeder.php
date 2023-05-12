<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aziende = ['Alitalia', 'AirFrance', 'AirDolomiti'];
        $aeroportoP = ['Verona', 'Trento', 'Bologna', 'Milano', 'Torino'];
        $aeroportoA = ['Roma', 'Firenze', 'Ancona', 'Napoli', 'Lecce'];

        for ($i = 0; $i <= 20; $i++) {
            DB::table('flights')->insert([

                'azienda' => $aziende[array_rand($aziende)],
                'aeroporto_di_partenza' => $aeroportoP[array_rand($aeroportoP)],
                'aeroporto_di_arrivo' => $aeroportoA[array_rand($aeroportoA)],
                'orario_di_partenza' => Carbon::now()->addMinutes(rand(-600, 600)),
                'orario_di_arrivo' => Carbon::now()->addMinutes(rand(-600, 600))->addHours(rand(1, 3)),
                'codice_volo' => $i,
                'numero_passeggeri' => rand(80, 150),
                'in_orario' => rand(0, 1) > 0.5,
                'cancellato' => rand(0, 1) > 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
