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
        Schema::connection('pgsql-cecy')->create('detail_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_code_id')->constrained('courses'); //codigo_curso
            $table->date('start_date'); //fecha_inicio
            $table->date('real_finish_date'); //fecha_fin_real
            $table->foreignId('person_instructor_id')->constrained('authentication.users'); //id_persona_instructor
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
        Schema::connection('pgsql-cecy')->dropIfExists('detail_registrations');
    }
}
