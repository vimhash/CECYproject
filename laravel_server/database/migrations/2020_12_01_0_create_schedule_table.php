<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //horarios
        Schema::connection('pgsql-cecy')->create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150); //nombre
            $table->foreignId('start_time')->constrained('ignug.catalogues'); //hora_inicio
            $table->foreignId('end_time')->constrained('ignug.catalogues'); //hora_fin
            $table->foreignId('day')->constrained('ignug.catalogues'); //dia
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('schedules');
    }
}
