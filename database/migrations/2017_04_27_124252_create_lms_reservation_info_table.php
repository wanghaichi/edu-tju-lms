<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLmsReservationInfoTable extends Migration
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
            $table->string('teacher_name');
            $table->unsignedInteger('course_id');
            $table->string('software');
            $table->integer('student_category');
            $table->text('remark');
            $table->string('class_category');
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
        Schema::dropIfExists('lms_reservation_info');
    }
}
