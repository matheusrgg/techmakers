<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Produto;

class TriagemController extends Controller
{

    public function viewTriagem(request $request){
        return view('estiloUsuario');
    }

    //////////////////////////// Triagem GAMER ////////////////////////////
    public function viewTriagemGamer(request $request){
        return view('estiloUsuarioGamer');
    }

    public function viewGamer_Notebook(request $request){
        
          $produtos = DB::table('produtos')->where([
                ['categoria', '=', 'Notebook'],
                ['quantity', '>', '0'],
                ['status', '=', '1'],
                ['gamer', '=', '1'],
          ])->orderBy('price', 'asc')
          ->get();

        return view('UsoGamerPreferenciaNotebook',["produtos"=>$produtos]);
    }

    public function viewGamer_Desktop(request $request){

        $produtos = DB::table('produtos')->where([
            ['categoria', '=', 'Desktop'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['gamer', '=', '1'],
      ])->orderBy('price', 'asc')
      ->get();

        return view('UsoGamerPreferenciaDesktop',["produtos"=>$produtos]);
    }


    //////////////////////////// Triagem USO PESSOAL //////////////////////////
    public function viewTriagemUsoPessoal(request $requiest){
        return view('estiloUsuarioUsoPessoal');
    }

    public function viewUsoPessoal_Entretenimento(request $request){

        $produtos = DB::table('produtos')->where([
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['pessoal1', '=', '1'],
      ])->orderBy('price', 'asc')
      ->get();

        return view('estiloUsoPessoalEntretenimento',["produtos"=>$produtos]);
    }

    public function viewUsoPessoal_Outros(request $request){

        $produtos = DB::table('produtos')->where([
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['pessoal2', '=', '1'],
      ])->orderBy('price', 'asc')
      ->get();


        return view('estiloUsoPessoalOutros',["produtos"=>$produtos]);
    }


    ////////////////////////////  Triagem USO PROFISSIONAL ////////////////////////
    public function viewUsoProfissional(request $request){
        return view('estiloUsuarioUsoProfissional');
    }


    // Triagem USO PROFISSIONAL - Tarefas do dia a dia de um Escritório
    public function viewProfissionalPreferencia(request $request){
        return view('estiloUsuarioUsoProfissionalPreferencia');
    }

    public function viewEscritorioDesktop(request $request){

        $produtos = DB::table('produtos')->where([
            ['categoria', '=', 'Desktop'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['profissional1', '=', '1'],
      ])->orderBy('price', 'asc')
      ->get();

        return view('UsoProfissionalPreferenciaEscritorioDesktop',["produtos"=>$produtos]);
    }

    public function viewEscritorioNotebook(request $request){

        $produtos = DB::table('produtos')->where([
            ['categoria', '=', 'Notebook'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['profissional1', '=', '1'],
            ])->orderBy('price', 'asc')
        ->get();

        return view('UsoProfissionalPreferenciaEscritorioNotebook',["produtos"=>$produtos]);
    }
    

    // Triagem USO PROFISSIONAL - Computação Gráfica, Design ou Marketing
    public function viewProfissionalPreferenciaCompGrafica(request $request){
        return view('estiloUsuarioUsoProfPreferCompGrafica');
    }

    public function viewCompGraficaDesktop(request $request){

        $produtos = DB::table('produtos')->where([
            ['categoria', '=', 'Desktop'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['profissional2', '=', '1'],
        ])->orderBy('price', 'asc')
          ->get();

        return view('UsoProfissionalPreferenciaCompGraficaDesktop',["produtos"=>$produtos]);
    }

    public function viewCompGraficaNotebook(request $request){

        $produtos = DB::table('produtos')->where([
            ['categoria', '=', 'Notebook'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['profissional2', '=', '1'],
        ])->orderBy('price', 'asc')
          ->get();

        return view('UsoProfissionalPreferenciaCompGraficaNotebook',["produtos"=>$produtos]);
    }


    // Triagem USO PROFISSIONAL - Desenvolvimento para iOS
    public function viewProfissionalPreferencia_iOS(request $request){
        return view('estiloUsuarioUsoProfPrefer_iOS');
    }

    public function viewiOS_Desktop(request $request){

        $produtos = DB::table('produtos')->where([
            ['categoria', '=', 'Desktop'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['profissional3', '=', '1'],
        ])->orderBy('price', 'asc')
          ->get();

        return view('UsoProfissionalPreferencia_iOS_Desktop',["produtos"=>$produtos]);
    }

    public function viewiOS_Notebook(request $request){

        $produtos = DB::table('produtos')->where([
            ['categoria', '=', 'Notebook'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['profissional3', '=', '1'],
         ])->orderBy('price', 'asc')
           ->get(); 

        return view('UsoProfissionalPreferencia_iOS_Notebook',["produtos"=>$produtos]);
    }


    // Triagem USO PROFISSIONAL - Desenvolvimento Geral
    public function viewProfissionalPreferencia_Geral(request $request){
        return view('estiloUsuarioUsoProfPrefer_Geral');
    }

    public function viewGeral_Desktop(request $request){

        $produtos = DB::table('produtos')->where([
            ['categoria', '=', 'Desktop'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['profissional4', '=', '1'],
        ])->orderBy('price', 'asc')
          ->get();

        return view('UsoProfissionalPreferencia_Geral_Desktop',["produtos"=>$produtos]);
    }

    public function viewGeral_Notebook(request $request){

        $produtos = DB::table('produtos')->where([
            ['categoria', '=', 'Notebook'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],
            ['profissional4', '=', '1'],
        ])->orderBy('price', 'asc')
          ->get();

        return view('UsoProfissionalPreferencia_Geral_Notebook',["produtos"=>$produtos]);
    }

}
