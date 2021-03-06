<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLavadorAutomovilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lavador_Automovil', function (Blueprint $table) {
            $table->string('Id_Automovil',12);
            $table->foreign('Id_Automovil')->references('Id_Automovil')->on('Automovil');
            $table->string('Id_Lavador',12);
            $table->foreign('Id_Lavador')->references('Id_Lavador')->on('Lavador');
            $table->primary(['Id_Automovil','Id_Lavador']);
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
        Schema::dropIfExists('Lavador_Automovil');
    }
}
