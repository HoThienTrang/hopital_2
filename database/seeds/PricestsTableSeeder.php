<?php

use Illuminate\Database\Seeder;
use App\Models\Price;

class PricestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Price::class, 10)->create();
    }
}
