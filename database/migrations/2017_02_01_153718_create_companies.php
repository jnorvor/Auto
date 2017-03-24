<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('location');
            $table->string('website');
            $table->time('start_work_time');
            $table->time('end_work_time');
            $table->string('first_work_day');
            $table->string('last_work_day');
            $table->string('description');
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
        Schema::connection('mysql2')->dropIfExists('companies');
    }
}
