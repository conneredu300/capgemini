<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabilitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilitacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('habilitado_ate');
            $table->unsignedBigInteger('posto_id');
            $table->unsignedBigInteger('funcionario_id');

            $table->foreign('posto_id')->references('posto_id')->on('posto_de_trabalho');
            $table->foreign('funcionario_id')->references('funcionario_id')->on('funcionarios');

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
        Schema::dropIfExists('habilitacoes');
    }
}
