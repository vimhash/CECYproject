<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_code',20);
            $table->string('course_name',20);
            $table->decimal('cost', 3, 2);
            $table->text('photo');
            $table->string('resumen',225);
            $table->integer('lasting_hours');
            $table->foreignId('modality_id')->constrained('ignug.catalogues');
            $table->integer('course_capacity_size');
            $table->boolean('for_free');
            $table->foreignId('state_id')->constrained('ignug.states');
            $table->string('course_observation',225);
            $table->string('aim',225); //objetivo
            $table->foreignId('participant_type_id')->constrained('ignug.catalogues');
            $table->foreignId('area_id')->constrained('ignug.catalogues');
            $table->foreignId('levels_id')->constrained('ignug.catalogues');
            $table->string('required_installing_sources',150); 
            $table->integer('practice_hours');
            $table->integer('theory_hours');
            $table->string('practice_required_resources',150);
            $table->string('aimtheory_required_resources',150);
            $table->string('learning_teaching_strategy',150);
            $table->date('proposed_date');
            $table->date('approval_date');
            $table->string('local_proposal_to_be_held',150);
            $table->foreignId('proposed_schedule_id')->constrained('schedules');
            $table->string('course_project',150);
            $table->foreignId('course_type_id')->constrained('ignug.catalogues');
            $table->foreignId('specialty_id')->constrained('ignug.catalogues'); //id_especialidad
            $table->foreignId('academic_period_id')->constrained('ignug.catalogues'); //id_periodo_academico
            $table->string('setec_name',200); //nombre_setec

            //tablas sin relaciones
            //$table->foreignId('person_approach_id')->constrained('authentication.users');
            //$table->foreignId('mood_id')->constrained('ignug.catalogues');
            //$table->foreign('schedule_proposal_id')->references('id')->on('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('courses');
    }
}
