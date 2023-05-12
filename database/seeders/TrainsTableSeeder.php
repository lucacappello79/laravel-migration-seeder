<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aziende = ['TrenItalia', 'TreNord', 'OBB'];
        $stazioniP = ['Verona', 'Trento', 'Bologna', 'Milano', 'Torino'];
        $stazioniA = ['Roma', 'Firenze', 'Ancona', 'Napoli', 'Lecce'];
        $tipo = ['Rg', 'Rv', 'Freccia', 'E-city', 'I-city'];

        for ($i = -10; $i <= 30; $i++) {
            DB::table('trains')->insert([
                // 'azienda' => $i,
                'azienda' => $aziende[array_rand($aziende)],
                // 'stazione_di_partenza' => $i,
                'stazione_di_partenza' => $stazioniP[array_rand($stazioniP)],
                // 'stazione_di_arrivo' => $i,
                'stazione_di_arrivo' => $stazioniA[array_rand($stazioniA)],
                // 'orario_di_partenza' => Carbon::now()->addHours($i),
                'orario_di_partenza' => Carbon::now()->addMinutes(rand(-600, 600)),
                // 'orario_di_arrivo' => Carbon::now()->addHours($i + 2),
                'orario_di_arrivo' => Carbon::now()->addMinutes(rand(-600, 600))->addHours(rand(1, 3)),
                'codice_treno' => $i,
                'numero_carrozze' => rand(8, 15),
                'in_orario' => rand(0, 1) > 0.5,
                'cancellato' => rand(0, 1) > 0.5,
                'tipo' => $tipo[array_rand($tipo)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
