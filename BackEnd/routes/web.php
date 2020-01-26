<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'siteController@viewHome');

Route::get('/computadores', "computadoresController@viewComputadores");

Route::get('/acessorios', "acessoriosController@viewAcessorios");

Route::get('/contato', "contatoController@viewContato");

Route::get('/acesso', "acessoController@viewAcesso");

Route::get('/esqueceuSenha', "esqueceuSenhaController@viewesqueceuSenha");

Route::get('/novo_usuario', "novo_usuarioController@viewnovo_usuario");


                        // Inicio das Rotas da Triagem //
Route::get('/estiloUsuario', 'TriagemController@viewTriagem');

// Rotas para GAMER //
Route::get('/estiloUsuario/PCgamer', 'TriagemController@viewTriagemGamer');
Route::get('/estiloUsuario/PCgamer/Gamer_Notebook', 'TriagemController@viewGamer_Notebook');
Route::get('/estiloUsuario/PCgamer/Gamer_Desktop', 'TriagemController@viewGamer_Desktop');

// Rotas para USO PESSOAL //
Route::get('/estiloUsuario/UsoPessoal', 'TriagemController@viewTriagemUsoPessoal'); 
Route::get('/estiloUsuario/UsoPessoal/Entretenimento', 'TriagemController@viewUsoPessoal_Entretenimento');
Route::get('/estiloUsuario/UsoPessoal/Outros', 'TriagemController@viewUsoPessoal_Outros');

// Rotas para USO PROFISSIONAL
Route::get('/estiloUsuario/UsoProfissional', 'TriagemController@viewUsoProfissional');

// Rotas para USO PROFISSIONAL - Tarefas do dia a dia de um escritório
Route::get('/estiloUsuario/UsoProfissional/Preferencia', 'TriagemController@viewProfissionalPreferencia');
Route::get('/estiloUsuario/UsoProfissional/Preferencia/EscritorioDesktop', 'TriagemController@viewEscritorioDesktop');
Route::get('/estiloUsuario/UsoProfissional/Preferencia/EscritorioNotebook', 'TriagemController@viewEscritorioNotebook');

// Rotas para USO PROFISSIONAL -Computação Gráfica,Design ou Marketing
Route::get('/estiloUsuario/UsoProfissional/PreferenciaCompGrafica', 'TriagemController@viewProfissionalPreferenciaCompGrafica');
Route::get('/estiloUsuario/UsoProfissional/Preferencia/CompGraficaDesktop', 'TriagemController@viewCompGraficaDesktop');
Route::get('/estiloUsuario/UsoProfissional/Preferencia/CompGraficaNotebook', 'TriagemController@viewCompGraficaNotebook');

// Rotas para USO PROFISSIONAL -Desenvolvimento para iOS
Route::get('/estiloUsuario/UsoProfissional/Preferencia_iOS', 'TriagemController@viewProfissionalPreferencia_iOS');
Route::get('/estiloUsuario/UsoProfissional/Preferencia/iOS_Desktop', 'TriagemController@viewiOS_Desktop');
Route::get('/estiloUsuario/UsoProfissional/Preferencia/iOS_Notebook', 'TriagemController@viewiOS_Notebook');

// Rotas para USO PROFISSIONAL -Desenvolvimento Geral
Route::get('/estiloUsuario/UsoProfissional/Preferencia_Geral', 'TriagemController@viewProfissionalPreferencia_Geral');
Route::get('/estiloUsuario/UsoProfissional/Preferencia/Geral_Desktop', 'TriagemController@viewGeral_Desktop');
Route::get('/estiloUsuario/UsoProfissional/Preferencia/Geral_Notebook', 'TriagemController@viewGeral_Notebook');
                          // Fim das Rotas da Triagem //


Route::get('/carrinho', 'siteController@viewCarrinho');


                        //Inicio das Rotas do Painel Administrativo//
Route::get('paineladm', "PainelAdmController@viewPainelAdm");                        
                        //Fim das Rotas do Painel Administrativo//                       


Route::get('/ecommerce', "ecommerceController@viewEcommerce");

Route::get('/cadastrarProduto', "cadastrarProdutoController@viewcadastrarProduto");

