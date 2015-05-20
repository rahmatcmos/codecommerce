<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->truncate();
        
        $faker = Faker::create();
        foreach(range(1,15) as $i) {
            Product::create([
                'name'        => ucfirst($faker->word),
                'description' => $faker->paragraph,
                'price'       => $faker->randomFloat(2, 0.01, 10000),
                'featured'    => $faker->boolean(),
                'recommend'   => $faker->boolean()
            ]);
        }
        
    }
}
