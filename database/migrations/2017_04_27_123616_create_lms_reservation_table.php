<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLmsReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lms_reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('info_id');
            $table->integer('num_week');
            $table->integer('num_day');
            $table->integer('num_course');
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
        //
        Schema::dropIfExists('lms_reservation');
    }
}
