<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('xml_id');
            $table->string("title");
            $table->unsignedBigInteger("parent_id");
            $table->unsignedBigInteger("warehouse_id")->fillable();
            $table->unsignedBigInteger("quality_id");
            $table->integer("count");
            $table->timestamps();
        });


        // Schema::table ('offers', function (Blueprint $table) {
        //     $table->foreignId('warehouse_id_key')->references('id')->on('warehouses')->onDelete('cascase')->onUpdate('cascade');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
