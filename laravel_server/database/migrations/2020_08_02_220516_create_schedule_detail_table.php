<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('schedule_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 150);
            $table->string('day', 150);
            $table->integer('hour');
            //$table->foreign('schedule_id')->references('')->on('');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('schedule_detail');
    }
}
