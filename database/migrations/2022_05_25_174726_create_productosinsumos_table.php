<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosinsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productosinsumos', function (Blueprint $table) {
            $table->bigIncrements('IdProductosInsumos');
            $table->integer('Cantidad');
            $table->unsignedBigInteger('Productos_IdProducto')->index('fk_ProductosInsumos_Productos1_idx');
            $table->unsignedBigInteger('UnidadesMedida_IdUnidadMedida')->index('fk_ProductosInsumos_UnidadesMedida1_idx');
            $table->unsignedBigInteger('Insumos_IdInsumo')->index('fk_ProductosInsumos_Insumos1_idx');
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
        Schema::dropIfExists('productosinsumos');
    }
}
