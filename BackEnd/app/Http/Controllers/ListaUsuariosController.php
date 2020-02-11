<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ListaUsuariosController extends Controller
{
    public function viewListaUsuarios(request $REQUEST){
     
        $ListaUsuarios = User::all();
        
      return view('ListaUsuarios',["ListaUsuarios"=>$ListaUsuarios]);

  }
}
