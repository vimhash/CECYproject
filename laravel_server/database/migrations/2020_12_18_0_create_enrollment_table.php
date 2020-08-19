<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('enrollment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('enrollment_date');
            //$table->foreign('involved_person_id')->references('')->on('');
            $table->double('final_grade', 15, 8);
            $table->boolean('approved');
            $table->string('status',10);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('enrollment');
    }
}
