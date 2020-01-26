<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class esqueceuSenhaController extends Controller
{
    public function viewesqueceuSenha(request $REQUEST){
        return view('esqueceuSenha');
    }
}
