<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producciones', function (Blueprint $table) {
            $table->bigIncrements('IdProduccion');
            $table->string('Nombre', 45);
            $table->integer('CantidadProducir');
            $table->date('Fecha');
            $table->unsignedBigInteger('Productos_IdProducto')->index('fk_Producciones_Productos1_idx');
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
        Schema::dropIfExists('producciones');
    }
}
