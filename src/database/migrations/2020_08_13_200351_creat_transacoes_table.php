<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatTransacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedbigInteger('empresa');
            $table->unsignedbigInteger('produto');
            $table->integer('quantidade');
            $table->date('data');
            $table->decimal('valor',8, 2);
            $table->boolean('condicao');
            $table->foreign('empresa')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('produto')->references('id')->on('produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
