<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string('name_airline');
            $table->string('desc_business');
            $table->boolean('disponibility');
            $table->timestamps();
        });




        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airlines_id');

            $table->date('hora_despuegue');
            $table->date('hora_llegada');
            


            $table->unsignedBigInteger("ciudad_origen");
            $table->unsignedBigInteger("ciudad_destino");

            /* FOREING */
            $table->foreign('airlines_id')->references('id')->on('airlines');
            


            $table->foreign('ciudad_origen')->references('id')->on('cities');
            $table->foreign('ciudad_destino')->references('id')->on('cities');

     
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
        Schema::dropIfExists('flights');
        Schema::dropIfExists('airlines');

    }
}
