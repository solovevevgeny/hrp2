<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PriceType;

class PriceTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $priceType = new PriceType();
        $priceType->xml_id = "xml_id";
        $priceType->title = "Розничная цена";
        $priceType->save();

        $priceType = new PriceType();
        $priceType->xml_id = "xml_id";
        $priceType->title = "Партнерская цена";
        $priceType->save();

        $priceType = new PriceType();
        $priceType->xml_id = "xml_id";
        $priceType->title = "Оптовая цена";
        $priceType->save();


    }
}
