<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIventarioHasProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iventario_has_produto', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('quantidade');
            $table->integer('corrigido');
            $table->integer('iventario');
            $table->integer('produto');
            $table->foreign('iventario')->references('id')->on('iventario');
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
        Schema::dropIfExists('iventario_has_produto');
    }
}
