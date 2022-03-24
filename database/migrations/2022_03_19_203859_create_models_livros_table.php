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
        Schema::create('tb_livros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codLivro');
            $table->string('titulo');
            $table->string('autor');
            $table->string('sinopse');
            $table->string('tipo');
            $table->string('codISBN');
            $table->double('valor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_livros');
    }
};