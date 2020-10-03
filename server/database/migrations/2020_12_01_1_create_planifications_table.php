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
            $table->date('date')->nullable();
            $table->foreignId('course_id')->constrained('courses');//cursos_id
            $table->json('needs'); //necesidades
            $table->foreignId('school_period_id')->constrained('school_periods');//periodo_id
            $table->foreignId('responsible_id')->constrained('authorities'); //id autoridad a cargo responsable
            $table->foreignId('state_id')->constrained('ignug.states');//stado_id
            $table->foreignId('status_id')->constrained('catalogue.catalogues');//status de la planificacion
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
