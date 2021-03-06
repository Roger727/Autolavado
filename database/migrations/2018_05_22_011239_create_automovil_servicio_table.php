<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomovilServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Automovil_Servicio', function (Blueprint $table) {
            $table->string('Id_Automovil',12);
            $table->foreign('Id_Automovil')->references('Id_Automovil')->on('Automovil');
            $table->string('Id_Servicio',12);
            $table->foreign('Id_Servicio')->references('Id_Servicio')->on('Servicio');
            $table->primary(['Id_Automovil','Id_Servicio']);
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
        Schema::dropIfExists('Automovil_Servicio');
    }
}
