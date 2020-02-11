<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Produto;

class computadoresController extends Controller
{
    public function viewComputadores(request $REQUEST){
     
        $produtos = DB::table('produtos')->where([
            ['categoria', '<>', 'Acessório'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],            
      ])->orderBy('price', 'asc')
      ->get();

        return view('computadores',["produtos"=>$produtos]);

    }
}
