<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('working_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name',150);
            $table->string('company_address',150);
            $table->string('company_email',150);
            $table->string('company_phone',150);
            $table->string('company_activity',150);
            $table->string('company_summmary',255); 
            $table->boolean('company_sponsor');
            $table->string('sponsor_name',255); 
            //$table->foreign('person_instructor_id')->references('')->on('');
            $table->string('Knowledge_course',150);
            $table->string('recomendation_course',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('working_information');
    }
}
