<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_offerings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level');
            $table->string('name', 100);
            $table->string('major', 100);
            $table->string('recognition', 20);
            $table->string('copc', 20);
            $table->date('last_monitoring_visit');
            $table->string('accreditation_status', 40);
            $table->string('accreditating_agency', 20);
            $table->date('accreditation_validity');
            $table->integer('hei_id');
            $table->integer('cluster_id');
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
        Schema::dropIfExists('program_offerings');
    }
}
