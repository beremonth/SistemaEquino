<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaballosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caballos', function (Blueprint $table) {
            $table->increments('Id');
            $table->char('Nombre', 20);
            $table->string('Raza');
            $table->bigInteger('Edad');
            $table->bigInteger('Puntuaje');
            $table->string('Fotografia');
            $table->boolean('Ganador')->default(false);
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
        Schema::dropIfExists('caballos');
    }
}
