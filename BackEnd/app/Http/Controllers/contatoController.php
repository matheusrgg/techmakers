<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function viewContato(request $REQUEST){
        return view('contato');
    }
}
