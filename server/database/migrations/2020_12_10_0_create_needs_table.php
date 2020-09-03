<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //necesidades_propuesta
        Schema::connection('pgsql-cecy')->create('needs', function (Blueprint $table) {
            $table->id();
            $table->string('description', 1000);//descripcion_necesidad
            $table->foreignId('course_id')->constrained('courses'); //id_codigo_curso
            $table->foreignId('state_id')->constrained('ignug.states'); //id_estado
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
        Schema::connection('pgsql-cecy')->dropIfExists('needs');
    }
}
