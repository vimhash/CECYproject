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
        Schema::connection('pgsql-cecy')->create('department_data', function (Blueprint $table) {
            $table->bigIncrements('id'); //id departamento data
            $table->string('name',150);
            $table->string('address',150);
            //$table->foreign('council_id')->references('')->on('');
            //$table->foreign('person_in_charge_id')->references('')->on('');
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
