<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;
use Illuminate\Support\Facades\DB;

class acessoriosController extends Controller
{
    public function viewAcessorios(request $REQUEST){

          $produtos = DB::table('produtos')->where([
                ['categoria', '=', 'Acessório'],
                ['quantity', '>', '0'],
                ['status', '=', '1'],
          ])->orderBy('price', 'asc')
          ->get();

        return view('acessorios',["produtos"=>$produtos]);
    }
}


