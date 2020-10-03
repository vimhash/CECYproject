<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //cursos
        Schema::connection('pgsql-cecy')->create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('code',20); //codigo
            $table->string('name',20); //nombre
            $table->decimal('cost', 3, 2); //costo
            $table->text('photo'); //foto
            $table->string('summary',1000); //resumen
            $table->integer('duration'); //duracion_horas
            $table->foreignId('modality_id')->constrained('catalogues'); //id_modalidad
            $table->boolean('free'); //gratuito
            $table->foreignId('state_id')->constrained('ignug.states'); //id_estado
            $table->string('observation',1000); //observacion_curso
            $table->string('objective',225); //objetivo
            $table->json('needs'); //necesidades del curso es un array
            $table->json('Target_group'); //Grupo a cual va diriguido el curso
            $table->json('facilities'); //instalaciones  entorno de aprendizaje
            $table->json('theoretical_phase'); //fase teorica entorno de aprendizaje
            $table->json('practical_phase'); //fase practica entorno de aprendizaje
            $table->json('cross_cutting_topics'); //temas trasversales
            $table->json('bibliographys'); //bibliografias
            $table->json('requirements'); //requerimientos
          //  $table->json('participant_types'); //tipos de participantes intentar traer el id de catalogo
            $table->json('teaching_strategies'); //estrategias de enseñansa - aprendizaje
            $table->foreignId('participant_type_id')->constrained('catalogues'); //id_tipo_participante
            $table->foreignId('area_id')->constrained('catalogues'); //id_area
            $table->foreignId('level_id')->constrained('catalogues'); //id_niveles
            $table->string('required_installing_sources',150); //recursos_requeridos_instalacion
            $table->integer('practice_hours'); //horas_practicas
            $table->integer('theory_hours'); //horas_teoricas
            $table->string('practice_required_resources',150); //recursos_requeridos_practica
            $table->string('aimtheory_required_resources',150); //recursos_requeridos_teoricos
            $table->string('learning_teaching_strategy',150); //estrategias_enseñanza_aprendizaje
            $table->string('nro_record',150); //numero de acta del OCS
            $table->foreignId('person_proposal_id')->constrained('authorities'); //id_persona_propuesta
            $table->date('proposed_date'); //fecha_propuesta
            $table->date('approval_date'); //fecha_aprobacion curso
            $table->date('need_date'); //fecha_registro de necesidad
            $table->date('expiration_date'); //fecha_vencimineto
            $table->date('authorisation_date'); //fecha_aprobacion OCS
            $table->string('local_proposal',500); //local_propuesta_a_dictar
            $table->foreignId('schedules_id')->constrained('catalogues'); //id_horario_propuesta
            $table->string('project',150); //proyecto_curso
            $table->integer('capacity'); //capacidad_curso
            $table->foreignId('classroom_id')->constrained('ignug.classrooms');//id_aula
            $table->foreignId('course_type_id')->constrained('catalogues'); //id_tipo_curso WebWinner,taller,curso
            $table->foreignId('specialty_id')->constrained('catalogues'); //id_especialidad
            $table->foreignId('academic_period_id')->constrained('catalogues'); //id_periodo_academico
            $table->string('setec_name',200); //nombre_setec
            $table->foreignId('certified_type_id')->constrained('catalogues'); //id_tipo_certificado asistecia,participacion
            $table->foreignId('attached')->constrained('ignug.files'); //id_tipo_certificado asistecia,participacion
            $table->string('abbreviation',200); //abreviatura
            $table->foreignId('career_id')->constrained('ignug.careers'); //id_tipo_carrera
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
        Schema::connection('pgsql-cecy')->dropIfExists('courses');
    }
}
