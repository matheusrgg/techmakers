
@extends('layouts.templatetePainelAdmchmakers')


@section('titulo')
  Lista de Usuários  
@endsection


@section('conteudo')

   <main>
    <!--- INÍCIO da Lista Geral de Usuários --->

    <div class="row text-center container-fluid pb-3">
        <div class="col-md-12">
          <h1 class="text-success mt-2"><b>Lista de Usuários</b></h1>
        </div>
    </div>
    
    <div class="col-md-12">
        <table class="table-bordered table-striped w-100">

          <thead class="text-center">
            <tr>

              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Perfil</th>
              <th scope="col">Data do Cadastro</th>
              <th scope="col">Data da Atualização</th>
              <th scope="col">Status</th>
              
              <th scope="col" class="">Ações <br> <a class="btn btn-warning btn-sm mb-1" href="/novoUsuario">&nbsp; CADASTRAR &nbsp;&nbsp;</a></th>

            </tr>
          </thead>

          <tbody class="text-center" >

            @forelse($ListaUsuarios as $usuario) 

                <tr>
                  <th scope="row"> {{$usuario->id}}</th>
                      <td>{{$usuario->name}}</td>
                      <td>{{$usuario->email}}</td>
                      <td>{{$usuario->perfil}}</td>
                      <td>{{$usuario->created_at}}</td>
                      <td>{{$usuario->updated_at}}</td>
                      <td>{{$usuario->status}}</td>

                      <td class="w-25">
                          <a class="btn btn-secondary btn-sm mb-1 mt-1" href="#">&nbsp; Desativar&nbsp;&nbsp;</a> 
                          <a class="btn btn-primary btn-sm mb-1 mt-1" href="/ListaUsuarios/formUpdateUsuario/{{$usuario->id}}">&nbsp; Editar&nbsp;&nbsp;</a> 
                          <a class="btn btn-danger btn-sm" href="/ListaUsuarios/{{$usuario->id}}">Apagar</a>
                      </td>
                  </tr>

                @empty
                  <h1>Não tem usuários cadastrados !</h1>
           
              @endforelse

          </tbody>

        </table>

    </div>
   <!--- FIM da Lista Geral de Usuários ---> 

   </main>

@endsection
