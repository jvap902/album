<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotes_figurinhas', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id');
            $table->integer('figurinhas_id');
            $table->date('dt_adicionada');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('figurinha_id')->references('id')->on('figurinhas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacotes_figurinhas');
    }
};
