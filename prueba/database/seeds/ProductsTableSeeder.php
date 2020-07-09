<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Product::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 50; $i++) {
            Product::create([
                'id'=>$faker->numberBetween(20,200),
                'name'=> $faker->sentence,
                'code'=> $faker->sentence,
                'price'=> $faker->numberBetween(0,100),
                ]);
        }
    }
}
