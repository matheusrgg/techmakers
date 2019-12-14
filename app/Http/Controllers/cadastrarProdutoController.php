<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastrarProdutoController extends Controller
{
    public function viewcadastrarProduto(request $REQUEST){
        return view('cadastrarProduto');
    }
}
