<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use App\Produto;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Produto;



class SiteController extends Controller
{
    public function viewHome(Request $request){
        return view('home');
    }



    public function viewOfertas(Request $request){

        $produtos = DB::table('produtos')->where([
            ['oferta', '=', '1'],
            ['quantity', '>', '0'],
            ['status', '=', '1'],            
        ])->orderBy('price', 'asc')
        ->get();   
       
        return view('home',["produtos"=>$produtos]);
    }




    public function viewCarrinho(Request $request){
        return view('carrinho');
    }
}
