<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstornoProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estorno_produto', function (Blueprint $table) {
            $table->integer('id', true)->unique();
            $table->integer('quantidade_compra');
            $table->integer('quantidade_estorno');
            $table->float('valor_unit');
            $table->float('valor_total');
            $table->string('observacao', 140)->nullable();
            $table->timestamps();
            $table->integer('saida')->unique();
            $table->integer('usuario');
            $table->foreign('saida')->references('id')->on('saida_produto');
            $table->foreign('usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estorno_produto');
    }
}
