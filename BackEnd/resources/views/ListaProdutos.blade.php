
@extends('layouts.templatetePainelAdmchmakers')


@section('titulo')
  Lista de Produtos  
@endsection


@section('conteudo')

   <main>
    <!--- INÍCIO da Lista Geral de Produtos --->

    <div class="row text-center container-fluid pb-3">
        <div class="col-md-12">
          <h1 class="text-success mt-2"><b>Lista de Produtos</b></h1>
        </div>
    </div>
    
    <div class="col-md-12">
        <table class="table-bordered table-striped w-100">

          <thead class="text-center">
            <tr>

              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Categoria</th>
              <th scope="col">Descrição</th>              
              <th scope="col">Preço Unitário</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Oferta</th>
              <th scope="col">Status</th>
              <th scope="col">Criado/Atualizado por</th>
              <th scope="col">Data do Cadastro</th>
              <th scope="col">Data da Atualização</th>
              
              <th scope="col" class="">Ações <br> <a class="btn btn-warning btn-sm mb-1" href="/cadastrarProduto">&nbsp; CADASTRAR &nbsp;&nbsp;</a></th>

            </tr>
          </thead>

          <tbody class="text-center" >

            @forelse($ListaProdutos as $produto) 

                <tr>
                  <th scope="row"> {{$produto->id}}</th>
                      <td>{{$produto->name}}</td>
                      <td>{{$produto->categoria}}</td>
                      <td>{{$produto->description}}</td>
                      <td>{{$produto->price}}</td>
                      <td>{{$produto->quantity}}</td>  
                      <td>{{$produto->oferta}}</td>
                      <td>{{$produto->status}}</td>
                      <td>{{$produto->user_id}}</td>
                      <td>{{$produto->created_at}}</td>
                      <td>{{$produto->updated_at}}</td>

                      <td class="w-25">
                          <a class="btn btn-secondary btn-sm mb-1 mt-1" href="#">&nbsp; Desativar&nbsp;&nbsp;</a> 
                          <a class="btn btn-primary btn-sm mb-1 mt-1" href="/ListaProdutos/formUpdate/{{$produto->id}}">&nbsp; Editar&nbsp;&nbsp;</a>
              
                          <a class="btn btn-danger btn-sm" href="/ListaProdutos/{{$produto->id}}">Apagar</a>
                      </td>
                  </tr>

                @empty
                  <h1>Não tem produtos cadastrados !</h1>
           
              @endforelse

          </tbody>

        </table>

    </div>
   <!--- FIM da Lista Geral de Produtos ---> 

   </main>

@endsection
