<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Price;
use App\Models\Product;
use App\Models\User;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 10)->create()->each(function ($product) {
            $priceIds = Price::inRandomOrder()->get();

            $product->prices()->attach($product->id, [
                'price_id' => $priceIds->random()->id,
            ]);
        });

    }
}
