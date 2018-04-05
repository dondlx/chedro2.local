<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsgCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psg_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 9);
            $table->string('name', 60);
            $table->string('inter_level', 12);
            $table->string('city_class', 4);
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
        Schema::dropIfExists('psg_codes');
    }
}
