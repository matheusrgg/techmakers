
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
                    <label for="descriptionProduct">Categoria</label>
                    <input class="form-control" type="text" name="categoriaProduct" id="categoriaProduct" value="{{$produto->categoria}}">
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
                    <label for="foto">Foto do Produto</label>
                    <input class="form-control" type="file" name="foto" id="foto" value="{{$produto->foto}}">
                </div>

                {{-- <div class="form-group">
                    <label for="ofertaProduct">Oferta (0 - Não / 1 - Sim)</label>
                    <input class="form-control" type="text" name="ofertaProduct" id="ofertaProduct" value="{{$produto->oferta}}">
                </div> --}}

                <label>Oferta:</label>
         
                <div>
          
                    <div class="form-check form-check-inline">
                      {{-- <input class="form-check-input" type="radio" name="ofertaProduct" id="ofertaProduct" value="0"> --}}
                      <input class="form-check-input" type="radio" name="ofertaProduct" id="ofertaProduct" value="0" {{ $produto->oferta == '0' ? 'checked' : '' }}>
                      <label class="form-check-label" for="ofertaProduct">Não</label>
                    </div>
                    <div class="form-check form-check-inline">
                      {{-- <input class="form-check-input" type="radio" name="ofertaProduct" id="ofertaProduct" value="1"> --}}
                      <input class="form-check-input" type="radio" name="ofertaProduct" id="ofertaProduct" value="1" {{ $produto->oferta == '1' ? 'checked' : '' }}>
                      <label class="form-check-label" for="ofertaProduct">Sim</label>
                    </div>
    
                </div>


                {{-- <div class="form-group">
                    <label for="status">Status (0 - Inativo / 1 - Ativo)</label>
                    <input class="form-control" type="text" name="status" id="status" value="{{$produto->status}}">
                </div> --}}


                <br>
                <label>Status:</label>
                <div>
                
                  <div class="form-check form-check-inline">
                    {{-- <input class="form-check-input" type="radio" name="status" id="status" value="0"> --}}
                    <input class="form-check-input" type="radio" name="status" id="status" value="0" {{ $produto->status == '0' ? 'checked' : '' }}>
                    <label class="form-check-label" for="status">Inativo</label>
                  </div>
                  <div class="form-check form-check-inline">
                    {{-- <input class="form-check-input" type="radio" name="status" id="status" value="1" checked> --}}
                    <input class="form-check-input" type="radio" name="status" id="status" value="1" {{ $produto->status == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="status">Ativo</label>
                  </div>
          
              </div>

        <!-- Inicio dos checkboxs da  TRIAGEM -->
        <br>
        <label>Triagem: </label>

        <div>

                <div class="form-group form-check-inline" >
                    <input class="form-check-input" type="checkbox" name="gamerProduct" value="1" {{$produto->gamer == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="gamerProduct">Gamer</label>
                </div>

                <div class="form-check form-check-inline">                             
                    <input class="form-check-input" type="checkbox" name="pessoal1Product" value="1" {{$produto->pessoal1 == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="pessoal1Product">Entretenimento</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pessoal2Product" value="1" {{$produto->pessoal2 == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="pessoal2Product">Outros</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="profissional1Product" value="1" {{$produto->profissional1  == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="profissional1Product">Tarefas de Escritório</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="profissional2Product" value="1" {{$produto->profissional2  == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="profissional2Product">Computação Gráfica</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="profissional3Product" value="1" {{$produto->profissional3   == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="profissional3Product">Desenvolvimento iOS</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="profissional4Product" value="1" {{$produto->profissional4  == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="profissional4Product">Desenvolvimento Geral</label>
                </div>
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
                        <h1>Realizada com sucesso! </h1>
                    @else
                        <h1>Não deu certo sua Atualização, e foi sua culpa! </h1>
                    @endif
                @endif
            </div>
        </div>
    
    </section>
@endsection