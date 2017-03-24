<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationHasVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_has_vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('organization_id');
            $table->unsignedInteger('vehicle_id');
            $table->boolean('does_rent');
            $table->timestamps();
            $table->foreign('organization_id')
                ->references('id')
                ->on('organizations')
                ->onDelete('cascade');
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
        Schema::dropIfExists('organization_has_vehicles');
    }
}
