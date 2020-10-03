<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPlanificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('detail_planifications', function (Blueprint $table) {
            $table->id();
            $table->date('date_start')->nullable();//fecha inicio
            $table->date('date_end')->nullable();//fecha fin
            $table->foreignId('planification_id')->constrained('planifications');//id de planificacion
            $table->foreignId('teacher_id')->constrained('authentication.users');//  profesor de usuarios
            $table->foreignId('state_id')->constrained('ignug.states');//id_curso
            $table->foreignId('status_id')->constrained('catalogue.catalogues');//status de la planificacion
            $table->foreignId('classroom_id')->constrained('ignug.classrooms');//id_curso
            $table->date('planned_end_date'); //fecha fin prevista
            $table->integer('capacity');//capacidad
            $table->integer('workday'); //jornada
            $table->integer('paralel'); //jornada
            $table->string('summary',1000); //resumen
            $table->string('code_certified',50); //codigo del certificado
            $table->string('state_certified',50); //estado del certificado
            $table->foreignId('detail_registration_id')->constrained('detail_registrations');//detalle de la matricula id
            $table->foreignId('instructor_id')->constrained('instructors');
            $table->foreignId('day_id')->constrained('catalogue.catalogues');// lunes martes miercoles ...
            $table->foreignId('start_time_id')->constrained('catalogue.catalogues');
            $table->foreignId('end_time_id')->constrained('catalogue.catalogues');
            $table->foreignId('nro_Day')->constrained('catalogue.catalogues');
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
        Schema::connection('pgsql-cecy')->dropIfExists('detail_planifications');
    }
}
