<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('planifications', function (Blueprint $table) {
            $table->id();
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->foreignId('course_id')->constrained('courses');//cursos_id
            $table->foreignId('teacher_id')->constrained('instructors');
            $table->foreignId('state_id')->constrained('ignug.states');//stado_id
          //  $table->foreignId('schedule_id')->constrained('cecy.schedules');//horaios_id
            $table->foreignId('school_period_id')->constrained('school_periods');//periodo_id
            $table->string('classroom', 100);
            $table->date('planned_end_date'); //fecha fin prevista
            $table->integer('capacity'); //capacidad_curso
            $table->foreignId('conference')->constrained('catalogues'); //jornada
            $table->foreignId('parallel')->constrained('catalogues'); //jornada
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
        Schema::connection('pgsql-cecy')->dropIfExists('planifications');
    }
}
