<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;

class ListaProdutosController extends Controller
{
    public function viewListaProdutos(request $REQUEST){
     
        $ListaProdutos = Produto::all();
        
      return view('ListaProdutos',["ListaProdutos"=>$ListaProdutos]);

  }
}
