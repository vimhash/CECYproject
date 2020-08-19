<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //detalle_matriculas
        Schema::connection('pgsql-cecy')->create('detail_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_code_id')->constrained('courses'); //codigo_curso
            $table->date('start_date'); //fecha_inicio
            $table->date('real_finish_date'); //fecha_fin_real
            $table->foreignId('person_instructor_id')->constrained('authentication.users'); //id_persona_instructor
            $table->foreignId('state_course_id')->constrained('ignug.states'); //id_estado_curso
            $table->foreignId('schedule_id')->constrained('schedules'); //id_horario
            $table->string('place_classes_are_held',50); //lugar_donde_se_dicta
            $table->date('forecast_finish_date'); //fecha_fin_prevista
            $table->string('course_observation',255); //observacion_curso
            $table->foreignId('registration_id')->constrained('registrations'); //id_matricula
            $table->decimal('grade1', 3, 2); //nota1
            $table->decimal('grade2', 3, 2); //nota2
            $table->decimal('final_grade', 3, 2); //nota_final
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
        Schema::connection('pgsql-cecy')->dropIfExists('detail_registrations');
    }
}
