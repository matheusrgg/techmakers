<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriagemController extends Controller
{
    public function viewTriagem(request $request){
        return view('estiloUsuario');
    }
    public function viewTriagemGamer(request $request){
        return view('estiloUsuarioGamer');
    }
    public function viewTriagemUsoPessoal(request $requiest){
        return view('estiloUsuarioUsoPessoal');
    }
    public function viewUsoProfissional(request $request){
        return view('estiloUsuarioUsoProfissional');
    }
}
