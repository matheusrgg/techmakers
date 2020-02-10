<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Http\Request;

use Auth;
use App\Produto;
use App\User;
// use App\Htpp\Controllers\Auth;

class UsuariosController extends Controller
{
      //criando novo usuário na tabela Users:

          public function createNovoUsuario(Request $request){

            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->perfil = 'Usuário';
            $newUser->password = Hash::make($request->senhaUsuario);
            $newUser->status = 1;

            $result = $newUser->save();

            return view('formNovoUsuario', ["result"=>$result]);

          } 

          public function viewnovoUsuario(Request $request){
            return view('novoUsuario');
        }



          public function FormUpdateUsuario(Request $request, $id){

            $usuario = User::find($id);
            if($usuario){
                return view('formUpdateUsuario',["usuario"=>$usuario]);  
            }else {
                return view('formUpdateUsuario');
            } 

         }


         public function update(Request $request){
          //Para atualizar devemos buscar um objeto ao invez de criar,
          // usando User::find($idProduto)
          //Vai ser necessario usar rotas com parametro   
  
        $usuario = User::find($request->idUsuario);
  
        $usuario->name = $request->nomeUsuario;
        $usuario->email = $request->emailUsuario;
        $usuario->perfil = $request->perfilUsuario;
        $usuario->status = $request->statusUsuario;
          
        $result = $usuario->save();
  
        return view('formUpdateUsuario', ["result"=>$result]);
      }

     
      
      public function viewFormUpdateUsuario(Request $request, $id){
      
              $usuario = User::find($id);
              if($usuario){
                  return view('formUpdateUsuario',["usuario"=>$usuario]);  
              }else {
                  return view('formUpdateUsuario');
              }        
      }



      public function delete(Request $request, $id){
     
              $produto = User::find($id);
        
              $result =  User::destroy($id);

              if($result){
                  return redirect('/ListaUsuarios');
              }
      }

      public function createcadastrarUsuario(Request $request){

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->perfil = 'Usuário';
        $newUser->password = Hash::make($request->senhaUsuario);
        $newUser->status = 1;

        $result = $newUser->save();

        return view('CadastrarUsuario', ["result"=>$result]);

      }

      public function viewcadastrarUsuario(Request $request){
        return view('CadastrarUsuario');
    }
      
      
     

}

