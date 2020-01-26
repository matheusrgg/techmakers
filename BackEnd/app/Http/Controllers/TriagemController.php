<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriagemController extends Controller
{

    public function viewTriagem(request $request){
        return view('estiloUsuario');
    }

    // Triagem GAMER
    public function viewTriagemGamer(request $request){
        return view('estiloUsuarioGamer');
    }
    public function viewGamer_Notebook(request $request){
        return view('UsoGamerPreferenciaNotebook');
    }
    public function viewGamer_Desktop(request $request){
        return view('UsoGamerPreferenciaDesktop');
    }

    // Triagem USO PESSOAL
    public function viewTriagemUsoPessoal(request $requiest){
        return view('estiloUsuarioUsoPessoal');
    }
    public function viewUsoPessoal_Entretenimento(request $request){
        return view('estiloUsoPessoalEntretenimento');
    }
    public function viewUsoPessoal_Outros(request $request){
        return view('estiloUsoPessoalOutros');
    }

    // Triagem USO PROFISSIONAL
    public function viewUsoProfissional(request $request){
        return view('estiloUsuarioUsoProfissional');
    }

    // Triagem USO PROFISSIONAL - Tarefas do dia a dia de um Escritório
    public function viewProfissionalPreferencia(request $request){
        return view('estiloUsuarioUsoProfissionalPreferencia');
    }
    public function viewEscritorioDesktop(request $request){
        return view('UsoProfissionalPreferenciaEscritorioDesktop');
    }
    public function viewEscritorioNotebook(request $request){
        return view('UsoProfissionalPreferenciaEscritorioNotebook');
    }

    // Triagem USO PROFISSIONAL - Computação Gráfica, Design ou Marketing
    public function viewProfissionalPreferenciaCompGrafica(request $request){
        return view('estiloUsuarioUsoProfPreferCompGrafica');
    }
    public function viewCompGraficaDesktop(request $request){
        return view('UsoProfissionalPreferenciaCompGraficaDesktop');
    }
    public function viewCompGraficaNotebook(request $request){
        return view('UsoProfissionalPreferenciaCompGraficaNotebook');
    }

    // Triagem USO PROFISSIONAL - Desenvolvimento para iOS
    public function viewProfissionalPreferencia_iOS(request $request){
        return view('estiloUsuarioUsoProfPrefer_iOS');
    }
    public function viewiOS_Desktop(request $request){
        return view('UsoProfissionalPreferencia_iOS_Desktop');
    }
    public function viewiOS_Notebook(request $request){
        return view('UsoProfissionalPreferencia_iOS_Notebook');
    }

    // Triagem USO PROFISSIONAL - Desenvolvimento Geral
    public function viewProfissionalPreferencia_Geral(request $request){
        return view('estiloUsuarioUsoProfPrefer_Geral');
    }
    public function viewGeral_Desktop(request $request){
        return view('UsoProfissionalPreferencia_Geral_Desktop');
    }
    public function viewGeral_Notebook(request $request){
        return view('UsoProfissionalPreferencia_Geral_Notebook');
    }



}
