<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_vendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('produto');
            $table->string('referencia');
            $table->double('quantidade');
            $table->double('valorUnitario');
            $table->double('totalItem');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_vendas');
    }
}
