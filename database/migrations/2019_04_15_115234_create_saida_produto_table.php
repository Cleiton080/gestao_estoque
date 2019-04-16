<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaidaProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saida_produto', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('quantidade');
            $table->float('preco');
            $table->float('total');
            $table->string('observacao', 140)->nullable();
            $table->timestamps();
            $table->integer('usuario');
            $table->integer('produto');
            $table->foreign('usuario')->references('id')->on('users');
            $table->foreign('produto')->references('id')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saida_produto');
    }
}
