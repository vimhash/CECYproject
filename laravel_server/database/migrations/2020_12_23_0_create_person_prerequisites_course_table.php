<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonPrerequisitesCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //persona_curso_prerequisitos
        Schema::connection('pgsql-cecy')->create('teacheperson_prerequisites_coursers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_participant_id')->constrained('authentication.users'); //id_persona_participante
            $table->foreignId('prerequisite_course_id')->constrained('courses'); //id_curso_prerequisito
            $table->boolean('registration_payment'); //pago_matricula
            $table->string('certified_number', 155); //numero_certificado
            $table->date('withdrawal_date'); //fecha_retiro
            $table->boolean('withdrawn_certificate'); //certificado_retirado
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('person_prerequisites_course');
    }
}
