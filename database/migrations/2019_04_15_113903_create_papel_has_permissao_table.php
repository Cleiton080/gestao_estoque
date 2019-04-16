<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapelHasPermissaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papel_has_permissao', function (Blueprint $table) {
            $table->integer('papel');
            $table->integer('permissao');
            $table->foreign('papel')->references('id')->on('papel');
            $table->foreign('permissao')->references('id')->on('permissao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papel_has_permissao');
    }
}
