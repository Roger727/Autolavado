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
