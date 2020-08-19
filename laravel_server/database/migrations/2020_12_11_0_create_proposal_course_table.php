<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('proposal_course', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->foreign(person_instructor_id')->references('')->on('');
            //$table->foreign('course_code_id')->references('course_code')->on('course');
            //$table->foreign('class_type_id')->references('')->on('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('proposal_course');
    }
}
