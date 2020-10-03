<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCecyAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('authorities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('authentication.users');//usuario
            $table->foreignId('state_id')->constrained('ignug.states');//estado
            $table->foreignId('status_id')->constrained('catalogue.catalogues');//stados=>suspendido,retirado,?
            $table->foreignId('position_id')->constrained('catalogue.catalogues');//cargo=>especialista,responsablestart_time
            $table->foreignId('institution_id')->constrained('cecy_institutions');//tabla de institucion
            $table->date('start_position'); //fecha inicio cargo
            $table->date('end_position'); //fecha fin cargo
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
        Schema::connection('pgsql-cecy')->dropIfExists('authorities');
    }
}
