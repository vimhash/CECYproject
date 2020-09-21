<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //convenios
        Schema::connection('pgsql-cecy')->create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->constrained('ignug.states');//estado
            $table->integer('duration'); //duracion en horas del curs
            $table->date('date'); //fecha
            $table->time('type_id')->constrained('catalogues');//tipo de calificacion por credito por hora etc
            $table->foreignId('detail_registration_id')->constrained('detail_registrations'); //id_detalle matricula
            $table->timestamps();//fecha y hora
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('attendances');
    }
}
