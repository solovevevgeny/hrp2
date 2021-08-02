<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ;;;;;VNL FH FM;07509184-77bb-11e9-9c6f-00155d464601;;;
        $product = new Product();
        $product->xml_id = "4856a318-82e8-11ea-80d7-0cc47a817b0f";
        $product->title = "Воздуховод отопителя";
        $product->category_xml_id = "f9ad82d5-731d-11ea-80d7-0cc47a817b0f";
        $product->category_id = 1;
        $product->OEM = "3175648";
        $product->save();


    }
}
