<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quality;

class QualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quality = new Quality();
        $quality->title = 'Новый' ;
        $quality->save();

        $quality = new Quality();
        $quality->title = 'б/у';
        $quality->save();

    }
}
