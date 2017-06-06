<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',60);
            $table->string('apellidopaterno',30);
            $table->string('apellidomaterno',30)->nullable();
            $table->string('dni',8);
            $table->string('direccion',50);
            $table->string('celular',9);
            $table->string('operador',20)->nullable();
            $table->string('estado',30);
            $table->integer('tipotrabajador_id')->unsigned();
            $table->foreign('tipotrabajador_id')->references('id')->on('tipotrabajadors');
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
        Schema::dropIfExists('trabajadors');
    }
}
