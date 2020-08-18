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
        Schema::connection('pgsql-cecy')->create('needs_proposal', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->foreign(need_id')->references('')->on('');
            //$table->foreign('course_code_id')->references('course_code')->on('course');
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
