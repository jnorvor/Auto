<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('has_type');
            $table->boolean('has_make');
            $table->boolean('has_model');
            $table->boolean('has_year');
            $table->boolean('has_fuel_type');
            $table->boolean('has_engine_capacity');
            $table->boolean('has_transmission');
            $table->boolean('has_wheel_type');
            $table->boolean('industrial_machine');
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
        Schema::dropIfExists('vehicle_group');
    }
}
