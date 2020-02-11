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

   //produtos::insert(['foto' => '/imagens/02_computacaoDesktop.jpg', 'name' => 'Computador Evolution Pro', 'description' => 'Excelente performace e permite várias conexões com outras plataformas de multimidia, possui mega processador de 35 ghz.', 'quantity' => '5', 'categoria' => 'desktop', 'price' => '13480,00', 'oferta' => '1', 'gamer' => '0', 'pessoal_entretenimento' => '0', 'pessoal_outro' => '0', 'profissional_escritorio' => '0', 'profissional_computacao_grafica' => '1', 'desenvolvedor_ios' => '0', 'desenvolvedor_geral' => '0', 'status' => '1']);         


        //    produtos::insert([
        //     ['foto' => '/imagens/02_computacaoDesktop.jpg'],    
        //     ['nome' => 'Computador Evolution Pro'],
        //     ['descricao' => 'Excelente performace e permite várias conexões com outras plataformas de multimidia, possui mega processador de 35 ghz.'],
        //     ['preco' => '13480,00']
     
        //     ['categoria' => 'desktop'],
        //     ['quantidade' => '5'],
        //     ['oferta' => '1'],            
        //     ['gamer' => '0'],
        //     ['pessoal_entretenimento' => '0'],
        //     ['pessoal_outro' => '0'],
        //     ['profissional_escritorio' => '0'],
        //     ['profissional_computacao_grafica' => '1'],
        //     ['desenvolvedor_ios' => '0'],
        //     ['desenvolvedor_geral' => '0'],
        //     ['status' => '1']
        //  ]);


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
