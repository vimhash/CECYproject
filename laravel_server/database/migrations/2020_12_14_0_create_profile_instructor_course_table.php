<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileInstructorCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('profile_instructor_course', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->foreign('course_code_id')->references('course_code')->on('course');
            $table->string('required_knowledge', 150);
            $table->string('required_experience', 150);
            $table->string('required_skills', 150);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('profile_instructor_course');
    }
}
