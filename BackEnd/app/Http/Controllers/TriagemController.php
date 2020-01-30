<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

          $produtos = Produto::all();
          
     //   $produtos = produtos::where('categoria', '=', 'notebook') and ('gamer', '=', '1') and ('status', '=', '1')->get();

        return view('UsoGamerPreferenciaNotebook',["produtos"=>$produtos]);
    }

    public function viewGamer_Desktop(request $request){

        $produtos = Produto::all();
          
        //   $produtos = produtos::where('categoria', '=', 'desktop') and ('gamer', '=', '1') and ('status', '=', '1')->get();

        return view('UsoGamerPreferenciaDesktop',["produtos"=>$produtos]);
    }


    //////////////////////////// Triagem USO PESSOAL //////////////////////////
    public function viewTriagemUsoPessoal(request $requiest){
        return view('estiloUsuarioUsoPessoal');
    }

    public function viewUsoPessoal_Entretenimento(request $request){

        $produtos = Produto::all();
          
        //   $produtos = produtos::where('pessoal_entretenimento', '=', '1') and ('status', '=', '1')->get();

        return view('estiloUsoPessoalEntretenimento',["produtos"=>$produtos]);
    }

    public function viewUsoPessoal_Outros(request $request){

             $produtos = Produto::all();
          
        //   $produtos = produtos::where('pessoal_OUTRO', '=', '1') and ('status', '=', '1')->get();


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

             $produtos = Produto::all();
          
        //   $produtos = produtos::where('profissional_escritorio', '=', '1') and ('categoria', '=', 'desktop') and ('status', '=', '1')->get();

        return view('UsoProfissionalPreferenciaEscritorioDesktop',["produtos"=>$produtos]);
    }

    public function viewEscritorioNotebook(request $request){

             $produtos = Produto::all();
          
        //   $produtos = produtos::where('profissional_escritorio', '=', '1') and ('categoria', '=', 'notebook') and ('status', '=', '1')->get();

        return view('UsoProfissionalPreferenciaEscritorioNotebook,["produtos"=>$produtos]');
    }
    

    // Triagem USO PROFISSIONAL - Computação Gráfica, Design ou Marketing
    public function viewProfissionalPreferenciaCompGrafica(request $request){
        return view('estiloUsuarioUsoProfPreferCompGrafica');
    }

    public function viewCompGraficaDesktop(request $request){

             $produtos = Produto::all();
          
        //   $produtos = produtos::where('profissional_computacao_grafica', '=', '1') and ('categoria', '=', 'desktop') and ('status', '=', '1')->get();

        return view('UsoProfissionalPreferenciaCompGraficaDesktop',["produtos"=>$produtos]);
    }

    public function viewCompGraficaNotebook(request $request){

             $produtos = Produto::all();
          
        //   $produtos = produtos::where('profissional_computacao_grafica', '=', '1') and ('categoria', '=', 'notebook') and ('status', '=', '1')->get();

        return view('UsoProfissionalPreferenciaCompGraficaNotebook',["produtos"=>$produtos]);
    }


    // Triagem USO PROFISSIONAL - Desenvolvimento para iOS
    public function viewProfissionalPreferencia_iOS(request $request){
        return view('estiloUsuarioUsoProfPrefer_iOS');
    }

    public function viewiOS_Desktop(request $request){

            $produtos = Produto::all();
          
        //   $produtos = produtos::where('desenvolvedor_ios', '=', '1') and ('categoria', '=', 'desktop') and ('status', '=', '1')->get();

        return view('UsoProfissionalPreferencia_iOS_Desktop',["produtos"=>$produtos]);
    }

    public function viewiOS_Notebook(request $request){

        $produtos = Produto::all();
          
        //   $produtos = produtos::where('desenvolvedor_ios', '=', '1') and ('categoria', '=', 'notebook') and ('status', '=', '1')->get();
        
        return view('UsoProfissionalPreferencia_iOS_Notebook',["produtos"=>$produtos]);
    }


    // Triagem USO PROFISSIONAL - Desenvolvimento Geral
    public function viewProfissionalPreferencia_Geral(request $request){
        return view('estiloUsuarioUsoProfPrefer_Geral');
    }

    public function viewGeral_Desktop(request $request){

        $produtos = Produto::all();
          
        //   $produtos = produtos::where('desenvolvedor_geral', '=', '1') and ('categoria', '=', 'desktop') and ('status', '=', '1')->get();

        return view('UsoProfissionalPreferencia_Geral_Desktop',["produtos"=>$produtos]);
    }

    public function viewGeral_Notebook(request $request){

        $produtos = Produto::all();
          
        //   $produtos = produtos::where('desenvolvedor_geral', '=', '1') and ('categoria', '=', 'notebook') and ('status', '=', '1')->get();

        return view('UsoProfissionalPreferencia_Geral_Notebook',["produtos"=>$produtos]);
    }


}
