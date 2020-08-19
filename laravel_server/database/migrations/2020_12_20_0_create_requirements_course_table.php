<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('requirements_course', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->foreign('requirement_id')->references('')->on('');
            //$table->foreign('course_code_id')->references('course_code')->on('course');
            //$table->foreign('type_id')->references('')->on('');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('requirements_course');
    }
}
