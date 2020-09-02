<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //contenido_cursos
        Schema::connection('pgsql-cecy')->create('courses_contents', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50); //nombre
            $table->foreignId('state_id')->constrained('ignug.states'); //id_estado
            $table->foreignId('course_code_id')->constrained('courses'); //id_codigo_curso
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
        Schema::connection('pgsql-cecy')->dropIfExists('courses_contents');
    }
}
