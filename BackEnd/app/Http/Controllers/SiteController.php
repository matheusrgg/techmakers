<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;



class SiteController extends Controller
{
    public function viewHome(Request $request){
        return view('home');
    }



    public function viewOfertas(Request $request){

        $produtos = Produto::all();
          
     // $produtos = produtos::where('oferta', '=', 1)->get();
   
        return view('home',["produtos"=>$produtos]);
    }




    public function viewCarrinho(Request $request){
        return view('carrinho');
    }
}
