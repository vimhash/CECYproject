<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposedRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //necesidades_propuesta
        Schema::connection('pgsql-cecy')->create('proposed_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('need_id')->constrained('ignug.catalogues'); //id_necesidad
            $table->foreignId('course_code_id')->constrained('courses'); //id_codigo_curso
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('proposed_requirements');
    }
}
