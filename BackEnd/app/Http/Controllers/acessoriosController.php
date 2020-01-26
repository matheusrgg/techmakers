<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acessoriosController extends Controller
{
    public function viewAcessorios(request $REQUEST){
        return view('acessorios');
    }
}
