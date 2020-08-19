<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeedsProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //necesidades_propuesta
        Schema::connection('pgsql-cecy')->create('needs_proposal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('need_id')->constrained('ignug.catalogues'); //id_necesidad
            $table->foreignId('course_code_id')->constrained('courses'); //codigo_curso
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('needs_proposal');
    }
}
