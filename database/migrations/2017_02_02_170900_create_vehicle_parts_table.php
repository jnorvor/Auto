<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vehicle_id');
            $table->string('part_name');
            $table->string('year_of_part');
            $table->string('make');
            $table->string('fuel_type');
            $table->string('engine_capacity');
            $table->string('description');
            $table->string('image');
            $table->string('price');
            $table->timestamps();
            $table->foreign('vehicle_id')
                ->references('id')
                ->on('vehicles')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_parts');
    }
}
