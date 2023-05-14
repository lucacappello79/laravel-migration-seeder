<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run(Faker $faker)
    // {

    //     for ($i = 0; $i <= 20; $i++) {

    //         $customer = new Customer();

    //         $customer->nome = $faker->firstName();
    //         $customer->cognome = $faker->lastName();
    //         $customer->eta = $faker->numberBetween(18, 99);
    //         $customer->data_di_nascita = $faker->dateTimeBetween('-99 years', '-18 years');
    //         $customer->codice_cliente = $faker->unique()->numerify('Customer###');
    //         $customer->iscritto = $faker->boolean();

    //         $customer->save();
    //     }
    // }


    public function run()
    {

        $customerFile = fopen(__DIR__ . '/../customers.csv', 'r');
        $customerCsv = fgetcsv($customerFile);
        $customerCsv = fgetcsv($customerFile);

        while ($customerCsv != false) {
            $customer = new Customer();

            $customer->nome = $customerCsv[0];
            $customer->cognome = $customerCsv[1];
            $customer->eta = $customerCsv[2];
            $customer->data_di_nascita = $customerCsv[3];
            $customer->codice_cliente = $customerCsv[4];
            $customer->iscritto = $customerCsv[5]  == '1' ? true : false;;

            $customer->save();
            $customerCsv = fgetcsv($customerFile);
        }

        fclose($customerFile);
    }
}
