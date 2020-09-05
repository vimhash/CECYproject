<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthoritiesTable extends Migration
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
            $table->foreignId('state_id')->constrained('ignug.states');//estado
            $table->foreignId('user_id')->constrained('authentication.users');//usuario
            $table->foreignId('position_id')->constrained('catalogues');//cargo=>especialista,responsable
            $table->foreignId('status_id')->constrained('catalogues');//stados=>suspendido,retirado,?
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
        Schema::connection('pgsql-job-board')->dropIfExists('authorities');
    }
}
