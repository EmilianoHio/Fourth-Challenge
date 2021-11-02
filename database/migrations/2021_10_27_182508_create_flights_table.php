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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->date('Hora_Despuegue');
            $table->date('Hora_Llegada');
            $table->unsignedBigInteger("ciudad_Origen");
            $table->unsignedBigInteger("ciudad_Destino");

            /* FOREING */


            $table->foreign('ciudad_Origen')->references('id')->on('cities');
            $table->foreign('ciudad_Destino')->references('id')->on('cities');

     
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
    }
}
