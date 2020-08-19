<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('course_instructors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status', 10);
            //$table->foreign('id_person_instructor')->references('')->on('');
            //$table->foreign('course_code_id')->references('course_code')->on('course');
            //$table->foreign('class_detail_id')->references('id_class_detail')->on('detail_course');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('course_instructors');
    }
}
