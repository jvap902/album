<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("email");
            $table->string("senha");
            $table->boolean('admin')->default(0);
            $table->timestamps();
        });

        DB::table('usuarios')->insert([
            ['nome' => 'jjjja', 'email' => 'jjjja@gmail.com', 'senha' => 'jjjja', 'admin' => 1],
            ['nome' => 'consumidor', 'email' => 'consumidor@gmail.com', 'senha' => 'consumidor', 'admin' => 0]
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
