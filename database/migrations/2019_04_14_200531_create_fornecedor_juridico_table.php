<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorJuridicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_juridico', function (Blueprint $table) {
            $table->char('cnpj', 14)->primary();
            $table->string('razao_social', 70);
            $table->integer('fornecedor')->unique();
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
        Schema::dropIfExists('fornecedor_juridico_models');
    }
}
