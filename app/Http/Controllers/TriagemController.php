<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriagemController extends Controller
{
    public function viewTriagem(request $request){
        return view('estiloUsuario');
    }
}
