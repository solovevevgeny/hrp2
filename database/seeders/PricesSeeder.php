<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price = new Price();
        $price->price_type = 1;
        $price->offer_id = 1;
        $price->price = 100;
        $price->save();

        $price = new Price();
        $price->price_type = 2;
        $price->offer_id = 1;
        $price->price = 200;
        $price->save();


    }
}
