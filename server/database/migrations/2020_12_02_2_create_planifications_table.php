<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanificationTable extends Migration
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
            $table->foreignId('course_id')->constrained('cecy.courses');
            $table->foreignId('teacher_id')->constrained('authentication.users');
            $table->foreignId('state_id')->constrained('ignug.states');
            $table->foreignId('schedule_id')->constrained('cecy.schedules');
            $table->foreignId('school_period_id')->constrained('cecy.school_periods');
            $table->string('classroom', 100);
            $table->string('planned_end_date', 500); //fecha fin prevista
            $table->integer('course_capacity'); //capacidad_curso
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
        Schema::connection('pgsql-cecy')->dropIfExists('catalogues');
    }
}
