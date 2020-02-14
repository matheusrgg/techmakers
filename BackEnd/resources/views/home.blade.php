@extends('layouts.templatetechmakers')

@section('titulo')
    Página Home
@endsection

@section('conteudo')

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=" https://cdn.doocacommerce.com.br/chipart/files/chipart-ray-tracing-desktop-min-kxFjo4Cbs6XOM6hS615686369062CbrrnEMJTNGjZ2ctiW.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a class="btn btn-success" href="/estiloUsuario" role="button">Ajuda para escolher meu computador</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://cdn.doocacommerce.com.br/chipart/files/chipart-banner-nvidia-jyJWekengc1W5NpTS1579087809Mb7Eg4oQWKbCMN3aAtS.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <a class="btn btn-success" href="/computadores" role="button">Eu escolho o meu computador</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://cdn.doocacommerce.com.br/chipart/files/chipart-gtx-16-series-3Q5SqkMx6TA6El2fx1572643009rBRbKSOOviygDj87N26.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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