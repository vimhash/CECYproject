<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //periodo_lectivo
        Schema::connection('pgsql-cecy')->create('school_periods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->constrained("ignug.states"); //id_estados
            $table->date('date_start'); //fecha_inicio
            $table->date('date_end'); //fecha_fin
            $table->date('date_cancel'); //fecha_anulacion
            $table->date('date_start_ordinary'); //fecha_inicio_ordinario
            $table->date('date_end_ordinary'); //fecha_fin_ordinaria
            $table->date('date_cancel_ordinary'); //fecha_anulacion_ordinaria
            $table->date('date_start_extraordinary'); //fecha_inicio_extraordinaria
            $table->date('date_end_extraordinary'); //fecha_fin_extraordinaria
            $table->date('date_cancel_extraordinary'); //fecha_anulacion_extraordinaria
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('school_periods');
    }
}
