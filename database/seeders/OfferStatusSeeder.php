<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OfferStatus;

class OfferStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new OfferStatus();
        $status->title = "В наличии";
        $status->save();

        $status = new OfferStatus();
        $status->title = "В пути";
        $status->save();

    }
}
