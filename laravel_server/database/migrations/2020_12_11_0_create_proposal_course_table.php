<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //propuesta_cursos
        Schema::connection('pgsql-cecy')->create('proposal_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('person_instructor_id')->constrained('authentication.users'); //persona_instructor
            $table->foreignId('course_code_id')->constrained('courses'); //codigo_curso
            $table->foreignId('course_type_id')->constrained('ignug.catalogues'); //id_tipo_curso
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('proposal_courses');
    }
}
