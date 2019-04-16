<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioHasPapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_has_papel', function (Blueprint $table) {
            $table->integer('usuario');
            $table->integer('papel');
            $table->foreign('usuario')->references('id')->on('users');
            $table->foreign('papel')->references('id')->on('papel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_has_papel');
    }
}
