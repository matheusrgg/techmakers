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

                        //Inicio das Rotas da Triagem//
Route::get('/estiloUsuario', 'TriagemController@viewTriagem');
Route::get('/estiloUsuario/PCgamer', 'TriagemController@viewTriagemGamer');
Route::get('/estiloUsuario/UsoPessoal', 'TriagemController@viewTriagemUsoPessoal'); 
Route::get('/estiloUsuario/UsoProfissional', 'TriagemController@viewUsoProfissional');
                        //Fim das Rotas da Triagem//

Route::get('/home', 'siteController@viewHome');


                        //Inicio das Rotas do Painel Administrativo//
Route::get('paineladm', "PainelAdmController@viewPainelAdm");                        
                        //Fim das Rotas do Painel Administrativo//                       


Route::get('/ecommerce', "ecommerceController@viewEcommerce");

Route::get('/cadastrarProduto', "cadastrarProdutoController@viewcadastrarProduto");