<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //registros academico
        Schema::connection('pgsql-cecy')->create('academic_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('authentication.users'); //id_usuario
            $table->foreignId('course_id')->constrained('courses'); //id_curso
            $table->foreignId('state_id')->constrained('ignug.states'); //id_estado
            $table->foreignId('teacher_id')->constrained('authentication.users'); //id_docente
            $table->foreignId('school_period_id')->constrained('school_periods'); //id_periodo_lectivo
            $table->decimal('grade1', 2, 3); //nota1
            $table->decimal('grade2', 2, 3); //nota2
            $table->decimal('final_grade', 2, 3); //nota_final
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
        Schema::connection('pgsql-cecy')->dropIfExists('academic_records');
    }
}
