<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('scheduleables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->constrained('ignug.states');//stado_id
            $table->foreignId('schedule_id')->constrained('schedules');//horario_id
            $table->morphs('schedulrable');
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
        Schema::connection('pgsql-cecy')->dropIfExists('scheduleables');
    }
}