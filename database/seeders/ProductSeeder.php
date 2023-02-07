<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as  Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker=Faker::create();
        for($i=1;$i<=10;$i++){
            $product=new Product;
        $product->name=$faker->name;
        $product->model="Lime mac 10 pro";
        $product->price=$faker->email;
        $product->save();
    }

    }
}
