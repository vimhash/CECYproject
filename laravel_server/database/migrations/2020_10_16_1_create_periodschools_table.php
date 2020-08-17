<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('periodschools', function (Blueprint $table) {
            $table->id();
            $table->date('date_start');
            $table->date('date_end');
            $table->date('date_cancel');
            $table->date('date_start_ordinary');
            $table->date('date_end_ordinary');
            $table->date('date_cancel_ordinary');
            $table->date('date_start_extraordinary');
            $table->date('date_end_extraordinary');
            $table->date('date_cancel_extraordinary');
            $table->foreignId('state_id')->constrained("ignug.states");
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('periodschools');
    }
}
