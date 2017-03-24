<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationHasCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_has_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('organization_id');
            $table->unsignedInteger('auto_category_id');
            $table->timestamps();
            $table->foreign('organization_id')
                ->references('id')
                ->on('organizations')
                ->onDelete('cascade');
            $table->foreign('auto_category_id')
                ->references('id')
                ->on('auto_categories')
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
        Schema::dropIfExists('organization_has_categories');
    }
}
