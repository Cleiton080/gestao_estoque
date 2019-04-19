<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('codigo_barras', 13);
            $table->string('nome', 70);
            $table->string('marca', 50)->nullable();
            $table->mediumText('descricao')->nullable();
            $table->integer('grade_x')->nullable();
            $table->integer('grade_y')->nullable();
            $table->char('ncm', 8);
            $table->float('valor_pago');
            $table->float('valor_venda');
            $table->integer('quantidade')->default(0);
            $table->integer('quantidade_min')->default(0);
            $table->string('imagem', 40)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('fornecedor');
            $table->foreign('fornecedor')->references('id')->on('fornecedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
