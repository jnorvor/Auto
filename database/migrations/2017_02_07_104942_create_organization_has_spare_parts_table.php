<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationHasSparePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_has_spare_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('organization_id');
            $table->unsignedInteger('part_id');
            $table->timestamps();
            $table->foreign('organization_id')
                ->references('id')
                ->on('organizations')
                ->onDelete('cascade');
            $table->foreign('part_id')
                ->references('id')
                ->on('vehicle_parts')
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
        Schema::dropIfExists('organization_has_spare_parts');
    }
}
