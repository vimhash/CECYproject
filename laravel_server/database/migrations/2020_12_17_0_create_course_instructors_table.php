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
        //curso_instructores
        Schema::connection('pgsql-cecy')->create('course_instructors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->constrained('ignug.states'); //id_estado
            $table->foreignId('person_instructor_id')->constrained('authentication.users'); //id_persona_instructor
            $table->foreignId('course_code_id')->constrained('courses'); //id_codigo_curso
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
