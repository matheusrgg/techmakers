<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use Session;
use App\Cart;

use App\htttp\Requests;


use App\Produto;
use App\User;
// use App\Htpp\Controllers\Auth;

class ProdutosController extends Controller
{
 ///  Criar funcao publica  viewComputadores

      public function viewComputadores(){
         $produtos = Produto::all();
         return view('computadores', ['produtos'=>$produtos]);
      }
 
    //   $produtos = produtos::where('status', '=', 1)->get();
    


    //  CRUDs para os Produtos

    // $name = $request->file('avatar')->getClientOriginalName();

    public $name;

    public function create(Request $request){

      $newProduct = new Produto();

      if($request->hasFile('foto') && $request->file('foto')->isValid()) {
        $data = date('His_');
        $name = $request->file('foto')->getClientOriginalName();
        //$extension = $request->foto->extension();
        //$fileName = "/imagens/{$data}{$name}";
        $fileName = "/imagens/{$name}";

        //salvando a foto no storage:
        $upload = $request->foto->storeAs('public/', $fileName);
        //salvando o caminho da foto no BD:
        $newProduct->foto = $fileName;
      }
      
      $newProduct->name = $request->nameProduct;
      $newProduct->description = $request->descriptionProduct;
      $newProduct->quantity = $request->quantityProduct;

      $newProduct->categoria = $request->categoriaProduct;
            
      $newProduct->price = $request->priceProduct;
      $newProduct->oferta = $request->ofertaProduct;

      $newProduct->gamer = $request->gamerProduct;
      $newProduct->pessoal1 = $request->pessoal1Product;
      $newProduct->pessoal2 = $request->pessoal2Product;
      $newProduct->profissional1 = $request->profissional1Product;
      $newProduct->profissional2 = $request->profissional2Product;
      $newProduct->profissional3 = $request->profissional3Product;
      $newProduct->profissional4 = $request->profissional4Product;
     
      $newProduct->status = 1;

      // $newProduct->user_id = Auth::user()->id;

      // Classe Auth é uma classe global, e toda vez que alguém loga o Laravel gera um objeto e armazena todos os dados do usuário na classe user.
      $newProduct->user_id = Auth()->user()->id;      

      $result = $newProduct->save();

      return view('CadastrarProduto', ["result"=>$result]);
    }


    public function viewForm(Request $request){
        return view('CadastrarProduto');
    }

    public function viewFormUpdate(Request $request, $id){
   
        $produto = Produto::find($id);
        if($produto){
            return view('formUpdate',["produto"=>$produto]);  
        }else {
            return view('formUpdate');
        }      
    }

    public function update(Request $request){
        //Para atualizar devemos buscar um objeto ao invez de criar,
        // usando Product::find($idProduto)
        //Vai ser necessario usar rotas com parametro   

      $produto = Produto::find($request->idProduct);

      if($request->hasFile('foto') && $request->file('foto')->isValid()) {
        $name = $request->file('foto')->getClientOriginalName();
        $fileName = "/imagens/{$name}";

        //salvando a foto no storage:
        $upload = $request->foto->storeAs('public/', $fileName);
        //salvando o caminho da foto no BD:
        $produto->foto = $fileName;
      }

      $produto->name = $request->nameProduct;
      $produto->description = $request->descriptionProduct;
      $produto->quantity = $request->quantityProduct;

      $produto->categoria = $request->categoriaProduct;
            
      $produto->price = $request->priceProduct;
      $produto->oferta = $request->ofertaProduct;

      $produto->gamer = $request->gamerProduct;
      $produto->pessoal1 = $request->pessoal1Product;
      $produto->pessoal2 = $request->pessoal2Product;
      $produto->profissional1 = $request->profissional1Product;
      $produto->profissional2 = $request->profissional2Product;
      $produto->profissional3 = $request->profissional3Product;
      $produto->profissional4 = $request->profissional4Product;
      $produto->status = $request->status;

      $result = $produto->save();

      return view('formUpdate', ["result"=>$result]);
    }


    public function delete(Request $request, $id){
     
        $produto = Produto::find($id);
 
       $result =  Produto::destroy($id);

       if($result){
           return redirect('/ListaProdutos');
       }

    }

    
    public function viewAllProducts(Request $request){
        // vai precisar do Product::All()

        $listProducts = Produto::all();

        return view('products.products', ['listProducts'=>$listProducts]);
    }

    public function viewOneProduct(Request $request){
        // vai precisar do Product::find($idProduct)
    }

    //////   Funções do Carrinho    //////

    public function getIndex(){
      $products = Produto::all();
      return view('carrinho', ['products' => $products]);
    }

    Public function getAddToCart(Request $request, $id){
      // dd(session()->get('cart'));
      $product = Produto::find($id);
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      // dd(session()->all());
      $cart = new Cart($oldCart);
      $cart->add($product, $product->id);
      Session::put('cart', $cart);
      return redirect()->route('carrinho');
    }

    // public function viewCarrinho(Request $request){
    //     // dd(Session::get('cart'));

    //     $produtosCarrinho = session()->get('cart');
    //     //dd($produtos[1]['item']);
    //     // dd($produtos);
    //     return view ('carrinho',['produtos'=>$produtosCarrinho->items]);
    // }

    public function getCart(){
      //  dd(session()->all());
      if(!Session::has('cart')){
          return view('carrinho',['products'=>null]);
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view ('carrinho',['products'=> $cart->items, 'totalPrice'=> $cart->totalPrice]);
    }





}

