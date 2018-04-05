<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 6);
            $table->string('name', 60);
            $table->string('form_of_ownership', 3);
            $table->string('type', 15);
            $table->string('address', 60);
            $table->integer('city_code');
            $table->integer('province_code');
            $table->integer('region_code');
            $table->string('email', 100);
            $table->string('website', 100);
            $table->string('year_established', 4);
            $table->integer('head_of_institution');
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
        Schema::dropIfExists('heis');
    }
}
