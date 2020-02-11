<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
 {
//     produtos::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])(['foto' => '/imagens/02_computacaoDesktop.jpg', 'name' => 'Computador 

// Evolution Pro', 'description' => 'Excelente performace e permite várias conexões com outras 

// plataformas de multimidia, possui mega processador de 35 ghz.', 'quantity' => '5', 'categoria' => 

// 'desktop', 'price' => '13480,00', 'oferta' => '1', 'gamer' => '0', 'pessoal_entretenimento' => '0', 

// 'pessoal_outro' => '0', 'profissional_escritorio' => '0', 'profissional_computacao_grafica' => '1', 

// 'desenvolvedor_ios' => '0', 'desenvolvedor_geral' => '0', 'status' => '1']);
    
     DB::table('produtos')->insert(array(
            'id' => null,
            'foto' => '/imagens/02_computacaoDesktop.jpg',
            'name' => 'Computador Evolution Pro',
            'description' => 'Excelente performace e permite várias conexões com outras plataformas de multimidia, possui mega processador de 35 ghz.',
            'quantity' => '5',
            'categoria' => 'desktop',
            'price' => '13480,00',
            'oferta' => '1',
            'gamer' => '0',
            'pessoal1' => '0',
            'pessoal2' => '0',
            'profissional1' => '0',
            'profissional2' => '1',
            'profissional3' => '0',
            'profissional4' => '0',
            'desenvolvedor_ios' => '0',
            'desenvolvedor_geral' => '0',
            'status' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s') )); 
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
