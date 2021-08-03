<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call (OfferStatusSeeder::class);
        $this->call (WarehousesSeeder::class);
        $this->call (PriceTypesSeeder::class);

        $this->call (CategoriesSeeder::class);
        $this->call (QualitySeeder::class);

        $this->call (ProductsSeeder::class);
        $this->call (OffersSeeder::class);
        $this->call (PricesSeeder::class);


    }
}
