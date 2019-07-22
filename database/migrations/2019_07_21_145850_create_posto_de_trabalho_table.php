<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostoDeTrabalhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posto_de_trabalho', function (Blueprint $table) {
            $table->bigIncrements('posto_id');
            $table->string('nome');
            $table->text('info');
            $table->enum('tipo', ['tipo1', 'tipo2']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posto_de_trabalho');
    }
}
