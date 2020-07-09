<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Customer::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 50; $i++) {
            Customer::create([
                'id'=>$faker->numberBetween(20,200),
                'name'=> $faker->sentence,
                'lastname'=> $faker->sentence,
                'document'=> $faker->sentence,

            ]);
        }
    }
}
