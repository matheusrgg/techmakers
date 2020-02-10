
@extends('layouts.templatetePainelAdmchmakers')

@section('titulo')
TechMakers
@endsection

@section('conteudo')
   
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Atualização do Produto</h1>
                <br>
            </div>
        </div>

        @if(isset($produto))

            <form action="/ListaProdutos/formUpdate" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="text" name="idProduct" value="{{$produto->id}}" hidden>

                <div class="form-group">
                    <label for="nameProduct">Nome do Produto</label>
                    <input class="form-control" type="text" name="nameProduct" id="nameProduct" value="{{$produto->name}}">
                </div>
                <div class="form-group">
                    <label for="descriptionProduct">Descrição</label>
                    <textarea id="descriptionProduct" name="descriptionProduct" class="form-control"> {{$produto->description}} </textarea>
                </div>
                <div class="form-group">
                    <label for="quantityProduct">Quantidade do Produto</label>
                    <input class="form-control" type="number" name="quantityProduct" id="quantityProduct" value="{{$produto->quantity}}">
                </div>
                <div class="form-group">
                    <label for="priceProduct">Preço do Produto</label>
                    <input class="form-control" type="number" name="priceProduct" id="priceProduct" value="{{$produto->price}}">
                </div>
                <div class="form-group">
                    <label for="imgProduct">Imagem do Produto</label>
                    <input class="form-control" type="file" name="imgProduct" id="imgProduct" >
                </div>

        <!-- Inicio dos checkboxs da  TRIAGEM -->

          <div class="form-group form-check-inline">
            <input class="form-check-input" type="checkbox" id="gamerProduct" value="{{$produto->gamer}}">
            <label class="form-check-label" for="gamerProduct">Gamer</label>
          </div>

          <div class="form-check form-check-inline">                             
            <input class="form-check-input" type="checkbox" id="pessoal1Product" value="1" {{$produto->pessoal1 == '1' ? 'checked' : '' }}>
            <label class="form-check-label" for="pessoal1Product">Entretenimento</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="pessoal2Product" value="{{$produto->pessoal2}}">
            <label class="form-check-label" for="pessoal2Product">Outros</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="profissional1Product" value="{{$produto->profissional1}}">
            <label class="form-check-label" for="profissional1Product">Tarefas de Escritório</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="profissional2Product" value="{{$produto->profissional2}}">
            <label class="form-check-label" for="profissional2Product">Computação Gráfica</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="profissional3Product" value="{{$produto->profissional3}}">
            <label class="form-check-label" for="profissional3Product">Desenvolvimento iOS</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="profissional4Product" value="{{$produto->profissional4}}">
            <label class="form-check-label" for="profissional3Product">Desenvolvimento Geral</label>
          </div>

       <!-- Fim dos checkboxs da  TRIAGEM -->

                
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Atualizar Produto</button>
                </div>
                
            </form>

        @elseif(isset($result))

        @else
            <h1>Você não passou um id ou o produto não existe!</h1>
        @endif
        <div class="row">
            <div class="col-md-12">
                @if(isset($result))
                    @if($result)
                        <h1>Deu certo campeão! </h1>
                    @else
                        <h1>Não deu certo sua Atualização, e foi sua culpa! </h1>
                    @endif
                @endif
            </div>
        </div>
    
    </section>
@endsection