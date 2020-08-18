<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrerequisiteCoursePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('prerequisite_course_person', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->foreign('participant_person_id')->references('')->on('');
            //$table->foreign('prerequirement_course_id')->references('')->on('');
            $table->boolean('enrollement_payment');
            $table->string('certificate_number',155);
            $table->date('withdrawal_date');
            $table->boolean('witdrawal_certificate');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('prerequisite_course_person');
    }
}
