<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->bigIncrements('IdInsumo');
            $table->string('Nombre',30);
            $table->integer('Cantidad');
            $table->double('Precio');
            $table->boolean('Estado');
            $table->unsignedBigInteger('UnidadesMedida_IdUnidadMedida')->index('fk_Insumos_UnidadesMedida1_idx');
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
        Schema::dropIfExists('insumos');
    }
}
