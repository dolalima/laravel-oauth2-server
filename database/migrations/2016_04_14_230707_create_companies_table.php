<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies',function(Blueprint $table){
            $table->increments('id');
            $table->string('company_name');
            $table->string('fantasy_name');
            $table->string('cnpj')->unique();
            $table->string('email')->unique();
            $table->integer('address_id')->unsigned();


            $table->foreign('address_id')->references('id')->on('addresses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
