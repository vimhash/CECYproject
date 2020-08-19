<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyConventionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('company_convention', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->foreign('agreement_id')->references('id_agreement')->on('agreement');
            $table->string('aim',255);
            $table->date('date_agreement_signature');
            $table->date('expiry_date');
            $table->string('representative_person',150);
            $table->string('social_reason',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('company_convention');
    }
}
