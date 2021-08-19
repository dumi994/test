<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++){
            
            $product = new Product();
            $product->name = $faker->sentence(3);
            $product->description = $faker->paragraphs(3);
            $product->price = $faker->numberBetween(20, 99);
            $product->image = $faker->imageUrl('cats', true, 'Faker');
            $product->save();
        };
    }
}
