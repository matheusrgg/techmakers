<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;


class acessoriosController extends Controller
{
    public function viewAcessorios(request $REQUEST){

          $produtos = Produto::all();   
     //   $produtos = produtos::where('categoria', '=', 'acessorio')->get();

        return view('acessorios',["produtos"=>$produtos]);
    }
}
