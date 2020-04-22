<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('softshopId');
            $table->string('produto');
            $table->string('referencia');
            $table->string('codBarra');
            $table->double('precoVenda');
            $table->double('precoCompra');
            $table->double('estoque');
            $table->string('unidadeMedida');
            $table->string('fabricante');
            $table->string('fornecedor');
            $table->string('grupo');
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
        Schema::dropIfExists('produtos');
    }
}
