<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vehicle_group_id');
            $table->string('type');
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->string('fuel_type');
            $table->string('engine_capacity');
            $table->string('transmission');
            $table->string('Image');
            $table->string('wheel_type');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
