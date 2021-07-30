<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warehouse;

class WarehousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warehose = new Warehouse;
        $warehose->xml_id = "xml_id";
        $warehose->title = "Санкт-Петербург";
        $warehose->address = "ЛО, пг Федоровское, первый Восточный проезд, д.1";
        $warehose->time = "пн-пт 09:30-18:00";
        $warehose->phone = "8-800-222-5373";
        $warehose->save();

        $warehose = new Warehouse;
        $warehose->xml_id = "xml_id";
        $warehose->title = "Владивосток";
        $warehose->address = "Владивосток, Артем, ул. Фрунзе, 47/1, 1-ый этаж";
        $warehose->time = "пн-пт 09:30-18:00";
        $warehose->phone = "8-800-222-5373";
        $warehose->save();

    }
}
