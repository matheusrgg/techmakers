<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Produto;

use Auth;

class cadastrarProdutoController extends Controller
{
    public function viewcadastrarProduto(request $REQUEST){


        
        return view('cadastrarProduto');
    }
}
