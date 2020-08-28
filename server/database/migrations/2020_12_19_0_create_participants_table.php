<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //estudiantes
        Schema::connection('pgsql-cecy')->create('participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('authentication.users'); //id_usuario
            $table->foreignId('person_type_id')->constrained('cecy.catalogues'); //id_tipo_persona
            $table->foreignId('state_id')->constrained();
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
        Schema::connection('pgsql-cecy')->dropIfExists('students');
    }
}
