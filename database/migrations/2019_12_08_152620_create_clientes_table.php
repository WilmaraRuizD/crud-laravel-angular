<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre');
            $table->string('apellido');
            $table->string('Nidentificacion');
            $table->string('telefono');
            $table->string('celular1');
            $table->string('celular2');
            $table->string('correo');
            $table->string('salario');



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
        Schema::dropIfExists('clientes');
    }
}
