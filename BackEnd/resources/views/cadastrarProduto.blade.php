@extends('layouts.templatetePainelAdmchmakers')

@section('titulo')
TechMakers
@endsection


@section('conteudo')

<main>

  <section class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Cadastro de Produto</h1>
        </div>
    </div>
    <form action="/cadastrarProduto" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nameProduct">Nome do Produto</label>
            <input class="form-control" type="text" name="nameProduct" id="nameProduct">
        </div>
        <div class="form-group">
            <label for="descriptionProduct">Descrição</label>
            <textarea id="descriptionProduct" name="descriptionProduct" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="quantityProduct">Quantidade do Produto</label>
            <input class="form-control" type="number" name="quantityProduct" id="quantityProduct">
        </div>
        <div class="form-group">
            <label for="priceProduct">Preço do Produto</label>
            <input class="form-control" type="number" name="priceProduct" id="priceProduct">
        </div>
        <div class="form-group">
            <label for="imgProduct">Foto do Produto</label>
            <input class="form-control" type="file" name="fotoProduct" id="fotoProduct">
        </div>

      <!-- Inicio dos checkboxs da  TRIAGEM -->

          <div class="form-group form-check-inline">
            <input class="form-check-input" type="checkbox" id="gamerProduct" value="1">
            <label class="form-check-label" for="gamerProduct">Gamer</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id=">pessoal1Product" value="1">
            <label class="form-check-label" for=">pessoal1Product">Entretenimento</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id=">pessoal2Product" value="1">
            <label class="form-check-label" for=">pessoal2Product">Outros</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id=">profissional1Product" value="1">
            <label class="form-check-label" for=">profissional1Product">Tarefas de Escritório</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id=">profissional2Product" value="1">
            <label class="form-check-label" for=">profissional2Product">Computação Gráfica</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id=">profissional3Product" value="1">
            <label class="form-check-label" for=">profissional3Product">Desenvolvimento iOS</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id=">profissional4Product" value="1">
            <label class="form-check-label" for=">profissional3Product">Desenvolvimento Geral</label>
          </div>

       <!-- Fim dos checkboxs da  TRIAGEM -->

        <div class="form-group">
            <button class="btn btn-success w-25 btn-lg" type="submit">Cadastrar</button>
            <a class="btn btn-success w-25 btn-lg ml-5" href="/ListaProdutos" role="button">Listar</a>
        </div>
        
    </form>

    <div class="row">
        <div class="col-md-12">
            @if(isset($result))
                @if($result)
                    <h1>Cadastro realizado com sucesso! </h1>
                @else
                    <h1>Não deu certo o seu cadastro, e foi sua culpa! </h1>
                @endif
            @endif
        </div>
    </div>

</section>

</main>

@endsection