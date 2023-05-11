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
        for ($i = 1; $i <= 10; $i++) {
            DB::table('trains')->insert([
                'azienda' => 'Company ' . $i,
                'stazione_di_partenza' => 'Departure Station ' . $i,
                'stazione_di_arrivo' => 'Arrival Station ' . $i,
                'orario_di_partenza' => Carbon::now()->addHours($i),
                'orario_di_arrivo' => Carbon::now()->addHours($i + 2),
                'codice_treno' => 'Code' . $i,
                'numero_carrozze' => rand(8, 15),
                'in_orario' => rand(0, 1) > 0.5,
                'cancellato' => rand(0, 1) > 0.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
