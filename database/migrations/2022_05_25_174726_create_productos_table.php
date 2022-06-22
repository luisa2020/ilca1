<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('IdProducto');
            $table->integer('Cantidad');
            $table->decimal('Precio', 10, 0);
            $table->string('Descripcion', 45);
            $table->unsignedBigInteger('UnidadesMedida_IdUnidadMedida')->index('fk_Productos_UnidadesMedida1_idx');
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
        Schema::dropIfExists('productos');
    }
}
