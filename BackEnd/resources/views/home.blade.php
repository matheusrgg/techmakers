@extends('layouts.templatetechmakers')

@section('titulo')
    Página Home
@endsection

@section('conteudo')
<div class="py-5 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(imagens/acessorios.jpg);  background-position:center;  background-size: cover;  background-repeat:repeat;">
          <div class="container py-5">
            <div class="row">
              <div class="mx-auto col-lg-8 col-md-10">
                <p class="lead mb-3">Compre o computador ideal para você!</p>
                <h1 class="mb-4 display-5">TechMakers<br>O seu computador personalizado</h1>
                <a class="btn btn-success" href="/estiloUsuario" role="button">Ajuda para escolher meu computador</a>
                 <div class="espaco my-3"></div>
                <a class="btn btn-primary" href="/computadores" role="button">Eu escolho o meu computador</a>
              </div>
            </div>
          </div>
        <!--- Fim da Foto de Abertura e das 2 opções de escolha para o usuário. --->
        </div>

        <!--- Início das Ofertas publicadas na tela HOME --->
        <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="imagens/icons/delivery.png" alt="">
                        <p>Frete Grátis</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="imagens/icons/voucher.png" alt="">
                        <p>Descontos exclusivos</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="imagens/icons/sales.png" alt="">
                    <p>10% de desconto para Notebook</p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <section class="latest-products spad">
        <div class="container">

            {{-- <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Ofertas</h2>
                        </div>

                        <ul class="product-controls">
                            <li data-filter="*">Todos</li>
                            <li data-filter=".dresses">Notebooks</li>
                            <li data-filter=".bags">Desktop</li>
                            <li data-filter=".shoes">All-in-one</li>
                            <li data-filter=".accesories">Acessórios</li>
                        </ul>

                    </div>
                </div>
            </div> --}}

            <div class="section-title mb-3 text-center">
                <h2  id="ofertas">Ofertas</h2>
            </div>

        <!-- Início dos Produtos em Oferta usando ForEach -->
        <div class="container">

            <div class="row">
 
                 @foreach($produtos as $produto)
 
                     <div class="col-lg-4 col-md-6 mb-4">
                     <div class="card h-100">
                       
                       <div class="card-body">
                         <h4 class="card-title text-center">
                           <a href="#"><img class="card-img-top" src="{{$produto->foto}}" alt="Imagem do computador desktop"></a>
                           <a href="#">{{$produto->name}}</a>
                         </h4>
                         <h5 class="text-center text-success">R$ {{$produto->price}}</h5>
                         <p class="card-text text-justify">{{$produto->description}}</p>
                       </div>
                       <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                         <a href="/addToCart/{{$produto->id}}" class="btn btn-success">Comprar</a>
                       </div>
                     </div>
                     </div>
 
                 @endforeach
 
            </div>
 
         </div>
         
        </div>

    </section>

     </div> 
</div>
@endsection