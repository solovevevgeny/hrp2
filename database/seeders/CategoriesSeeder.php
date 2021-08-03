<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = New Category();
        $category->xml_id = "xml_id";
        $category->title = "Агрегаты";
        $category->parent_id = 0;
        $category->save();

        $category = New Category();
        $category->xml_id = "xml_id";
        $category->title = "Двигатели";
        $category->parent_id = 1;
        $category->save();


        $category = New Category();
        $category->xml_id = "xml_id";
        $category->title = "КПП";
        $category->parent_id = 1;
        $category->save();

        $category = New Category();
        $category->xml_id = "xml_id";
        $category->title = "Редукторы";
        $category->parent_id = 1;
        $category->save();


        $category = New Category();
        $category->xml_id = "xml_id";
        $category->title = "Кузовные";
        $category->parent_id = 0;
        $category->save();


        $category = New Category();
        $category->xml_id = "xml_id";
        $category->title = "Двигатель";
        $category->parent_id = 0;
        $category->save();


    }
}
