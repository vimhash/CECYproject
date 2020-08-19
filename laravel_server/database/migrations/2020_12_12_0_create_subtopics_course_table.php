<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtopicsCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //subtemas_curso
        Schema::connection('pgsql-cecy')->create('subtopics_course', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50); //nombre
            $table->foreignId('course_code_id')->constrained('courses'); //codigo_curso
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('subtopics_course');
    }
}
