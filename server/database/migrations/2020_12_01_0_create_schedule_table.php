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
            $table->foreignId('start_time')->constrained('cecy.catalogues'); //hora_inicio
            $table->foreignId('end_time')->constrained('cecy.catalogues'); //hora_fin
            $table->foreignId('day')->constrained('cecy.catalogues'); //dia
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
        Schema::connection('pgsql-cecy')->dropIfExists('schedules');
    }
}
