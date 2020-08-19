<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('date_registration', 50);
            $table->boolean('approved');
            $table->integer('number_registration');
            $table->foreignId('state_id')->constrained("ignug.states");
            $table->foreignId('type_id')->constrained('ignug.catalogues');
            $table->foreignId('period_school_id')->constrained('periodschools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('registrations');
    }
}
