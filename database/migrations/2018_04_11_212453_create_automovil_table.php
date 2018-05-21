<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomovilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Automovil', function (Blueprint $table) {
            $table->string('Id_Automovil',12)->primary('Id_Automovil');
            $table->string('Matricula',9);
            $table->string('Color',15);
            $table->string('Modelo',10);
            $table->string('Id_Lavador',12)->nullable();
            $table->foreign('Id_Lavador')->references('Id_Lavador')->on('Lavador');
            $table->string('Id_Servicio',12)->nullable();
            $table->foreign('Id_Servicio')->references('Id_Servicio')->on('Servicio');
            $table->string('Pago',10)->nullable()->index();

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
        Schema::dropIfExists('Automovil');
    }

}
