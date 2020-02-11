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
          <label for="descriptionProduct">Categoria</label>
          <input class="form-control" type="text" name="categoriaProduct" id="categoriaProduct">
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
            <label for="foto">Foto do Produto</label>
            <input class="form-control" type="file" name="foto" id="foto">
        </div>

        <div class="form-group">
          <label for="ofertaProduct">Oferta (0 - Não / 1 - Sim)</label>
          <input class="form-control" type="text" name="ofertaProduct" id="ofertaProduct">
      </div>



        <div class="form-group">
          <label for="status">Status (0 - Inativo / 1 - Ativo)</label>
          <input class="form-control" type="text" name="status" id="status">
      </div>

      <!-- Inicio dos checkboxs da  TRIAGEM -->

      <label>Triagem: </label>
         
            <div>
                  <div class="form-group form-check-inline">
                    <input class="form-check-input" type="checkbox" name="gamerProduct" value="1">
                    <label class="form-check-label" for="gamerProduct">Gamer</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pessoal1Product" value="1">
                    <label class="form-check-label" for=">pessoal1Product">Entretenimento</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pessoal2Product" value="1">
                    <label class="form-check-label" for=">pessoal2Product">Outros</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="profissional1Product" value="1">
                    <label class="form-check-label" for=">profissional1Product">Tarefas de Escritório</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="profissional2Product" value="1">
                    <label class="form-check-label" for=">profissional2Product">Computação Gráfica</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="profissional3Product" value="1">
                    <label class="form-check-label" for=">profissional3Product">Desenvolvimento iOS</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="profissional4Product" value="1">
                    <label class="form-check-label" for=">profissional4Product">Desenvolvimento Geral</label>
                  </div>
            </div>
       <!-- Fim dos checkboxs da  TRIAGEM -->

        <div class="form-group">
            <button class="btn btn-success w-25 btn-lg" type="submit">Cadastrar</button>
            <a class="btn btn-success w-25 btn-lg ml-5" href="/ListaProdutos" role="button">Listar</a>
        
        
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