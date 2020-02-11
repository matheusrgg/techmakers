<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acessoController extends Controller
{
    public function viewAcesso(request $REQUEST){
        return view('acesso');
    }
}
