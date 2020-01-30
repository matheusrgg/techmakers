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
            // $table->bigIncrements('id'); 
            // $table->string('foto', 200);           
            // $table->string('nome', 50);
            // $table->string('descricao', 300);
            // $table->float('preco',10,2); 
            // $table->string('categoria', 10);
            // $table->integer('quantidade',50);
            // $table->boolean('oferta');            
            // $table->boolean('gamer');
            // $table->boolean('pessoal1');
            // $table->boolean('pessoal2');
            // $table->boolean('profissional1');
            // $table->boolean('profissional2');
            // $table->boolean('profissional3');
            // $table->boolean('profissional4');
            // $table->boolean('status');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->timestamps();


            $table->bigIncrements('id');
            $table->string('foto', 200); 
            $table->string('name', 300);
            $table->string('description',300);
            $table->integer('quantity');
            $table->float('price',10,2);

            $table->boolean('status');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();

        });


        // produtos::insert([
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
