<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Produto;

class ProdutosController extends Controller
{
 ///  Criar funcao publica  viewComputadores

      public function viewComputadores(){
         $produtos = Produto::all();
         return view('computadores', ['produtos'=>$produtos]);
      }
 
    //   $produtos = produtos::where('status', '=', 1)->get();
    //   $produtos = ["Teste"];

}

