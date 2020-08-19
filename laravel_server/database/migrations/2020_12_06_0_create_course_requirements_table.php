<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //requerimientos curso
        Schema::connection('pgsql-cecy')->create('course_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requirement_id')->constrained('courses'); //id_requisito
            $table->foreignId('course_id')->constrained('courses'); //id_curso
            $table->foreignId('course_requirement_type_id')->constrained('ignug.catalogues'); //id_tipo_requerimiento_curso
            
            // $table->boolean('enrollement_payment');
            // $table->string('certificate_number',155);
            // $table->date('withdrawal_date');
            // $table->boolean('witdrawal_certificate');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('course_requirements');
    }
}
