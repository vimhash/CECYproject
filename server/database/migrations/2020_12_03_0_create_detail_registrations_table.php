<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //detalle_matriculas
        Schema::connection('pgsql-cecy')->create('detail_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('code_id')->constrained('courses'); //codigo_curso
            $table->foreignId('registration_id')->constrained('registrations'); //id_matricula
            $table->decimal('grade1', 3, 2); //nota1
            $table->decimal('grade2', 3, 2); //nota2
            $table->decimal('final_grade', 3, 2); //nota_final
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
        Schema::connection('pgsql-cecy')->dropIfExists('detail_registrations');
    }
}
