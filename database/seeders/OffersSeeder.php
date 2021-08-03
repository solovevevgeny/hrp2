<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Offer;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $offer = new Offer();
        $offer->xml_id = "xml_id";
        $offer->title = "Воздуховод отопителя";
        $offer->parent_id = 1;
        $offer->quality_id = 1;
        $offer->warehouse_id = 1;
        $offer->count = 10;
        $offer->save();

        $offer = new Offer();
        $offer->xml_id = "xml_id";
        $offer->title = "Воздуховод отопителя";
        $offer->parent_id = 1;
        $offer->quality_id = 1;
        $offer->warehouse_id = 2;
        $offer->count = 10;
        $offer->save();
    }
}
