<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('name');
            $table->string('phone_number');
            $table->text('location');
            $table->string('email');
            $table->string('website');
            $table->string('first_work_day');
            $table->string('last_work_day');
            $table->time('start_work_time');
            $table->time('end_work_time');
            $table->boolean('verified');
            $table->timestamp('date_verified');
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
        Schema::dropIfExists('organizations');
    }
}
