<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('cep', 8);
            $table->string('logradouro');
            $table->string('bairro', 90);
            $table->string('cidade', 90);
            $table->char('estado', 2);
            $table->integer('fornecedor')->unique();
            
            $table->foreign('estado')->references('uf')->on('estado');
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
        Schema::dropIfExists('endereco');
    }
}
