<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('detail_course', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->foreign('course_code_id')->references('course_code')->on('course');
            $table->date('start_date');
            $table->date('actual_finish_date');
            //$table->foreign('person_instructor_id')->references('')->on('');
            $table->string('course_stage',20);
            //$table->foreign('schedule_id')->references('')->on('schedule');
            $table->string('place_classes_are_held',50);
            $table->date('forecast_finish_date');
            $table->string('observations_course',255);
            //$table->foreign('enrollment_id')->references('')->on('enrollment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('detail_course');
    }
}
