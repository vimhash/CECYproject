<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //datos_departamento
        Schema::connection('pgsql-cecy')->create('department_data', function (Blueprint $table) {
            $table->id();
            $table->string('name',150); //nombre
            $table->string('address',150); //direccion
            $table->foreignId('person_in_charge_id')->constrained('authentication.users'); //id_persona_encargada
            $table->foreignId('schedule_id')->constrained('schedules'); //id_horario

            //$table->foreign('canton_id')->references('')->on(''); //id_canton
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('department_data');
    }
}
