<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class novo_usuarioController extends Controller
{
    public function viewnovo_usuario(request $REQUEST){
        return view('novo_usuario');
    }
}
