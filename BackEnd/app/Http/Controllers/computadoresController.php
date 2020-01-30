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
     
          $produtos = Produto::all();
          
     //   $produtos = produtos::where('status', '=', 1)->get();
     //   $produtos = ["Teste"];

        return view('computadores',["produtos"=>$produtos]);

    }
}
