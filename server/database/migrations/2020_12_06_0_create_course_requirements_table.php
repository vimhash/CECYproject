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
        Schema::connection('pgsql-cecy')->create('requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses'); //id_curso
            $table->foreignId('state_id')->constrained('ignug.states'); //id_estado
            $table->foreignId('requirement_type_id')->constrained('cecy.catalogues'); //id_tipo_requerimiento_curso
            $table->timestamps();

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
        Schema::connection('pgsql-cecy')->dropIfExists('requirements');
    }
}
