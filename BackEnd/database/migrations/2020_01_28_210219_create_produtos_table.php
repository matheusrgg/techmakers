<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('foto', 200)->nullable(); 
            $table->string('name', 300)->nullable();
            $table->string('description',300)->nullable();
            $table->integer('quantity')->nullable();
            $table->string('categoria',20)->nullable();
            $table->float('price',10,2)->nullable();
            $table->tinyInteger('oferta')->nullable();            
            $table->tinyInteger('gamer')->nullable();
            $table->tinyInteger('pessoal1')->nullable();
            $table->tinyInteger('pessoal2')->nullable();
            $table->tinyInteger('profissional1')->nullable();
            $table->tinyInteger('profissional2')->nullable();
            $table->tinyInteger('profissional3')->nullable();
            $table->tinyInteger('profissional4')->nullable();
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('produtos');
    }
}
