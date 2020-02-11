@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection

@section('conteudo')

<!-- Foto de fundo após o menu principal -->
<div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(/imagens/bannercomputadorprof.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
          <div class="container py-4">
            <div class="row">
              <div class="mx-auto col-lg-8 col-md-10">
                <h1 class="mb-4 display-5"br>Escolha o seu estilo de computador ideal</h1>
              </div>
            </div>
          </div>
    </div>
    
    <div class="text-center">
      
      <!-- Incluido no container, um padding de pb-5 para não ficar grudado no footer da página. -->
      <div class="container-fluid pb-5">

        <div class="row justify-content-center">


          <nav>
            <div class="nav-wrapper">
              <div class="col s12 d-inline-flex align-items-center" style="margin:15px">
                <a href="/estiloUsuario" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/1p.jpg" width="35" height="35"></a>
                <a href="/estiloUsuario/UsoPessoal" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/2p.jpg" width="35" height="35"></a>
                <a class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/3p.jpg" width="35" height="35"></a>              </div>
          </div> 
          </nav>  

        </div>

        <div class="row">
          <div class="col-md-12">
            <h1 class="text-success"><b>Computadores para Entretenimento</b></h1>
          </div>
        </div>

        <!-- Início dos Computadores para ENTRETENIMENTO usando ForEach -->
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
       <!--- Fim dos Computadores para ENTRETENIMENTO  usando ForEach --->

              {{-- <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                          <a href="#"><img class="card-img-top" src="/imagens/01_EscritorioDesktop.jpg" alt="Imagem do computador desktop"></a>
                          <div class="card-body">
                            <h4 class="card-title text-center">
                              <a href="#">Easypc Smart Intel Dual 500gb</a>
                            </h4>
                            <h5 class="text-center text-success">R$ 520,00</h5>
                            <p class="card-text">Este Computador EasyPC é feito sob medida para que você extraia o máximo da sua produtividade no trabalho. Ele também proporciona conectividade sem igual para você navegar pela internet, assistir filmes, ou se comunicar com seus amigos e familiares com velocidade e fluidez. Interaja com os seus dispositivos portáteis através das conexões Hdmi, Hd Áudio de 5.1 canais ou conexão de rede de alta velocidade de 1GBPS.</p>
                          </div>
                          <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                            <a href="#" class="btn btn-success">Comprar</a>
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                          <a href="#"><img class="card-img-top" src="/imagens/03_EscritorioDesktop.jpg" alt="Imagem do computador desktop"></a>
                          <div class="card-body">
                            <h4 class="card-title text-center">
                              <a href="#">Easypc Smart com caixa de som - Intel Core dual 1TB</a>
                            </h4>
                            <h5 class="text-center text-success">R$ 1.550,00</h5>
                            <p class="card-text">O desempenho que você precisa para uma jornada de trabalho eficiente. Saídas de áudio com qualidade HD e conexões USB estão dipooníveis na frontal do pc.</p>
                          </div>
                          <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                            <a href="#" class="btn btn-success">Comprar</a>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                          <a href="#"><img class="card-img-top" src="/imagens/02_EscritorioDesktop.jpg" alt="Imagem do computador desktop"></a>
                          <div class="card-body">
                            <h4 class="card-title text-center">
                              <a href="#">Easy PC Connect - Intel Core i5 2TB</a>
                            </h4>
                            <h5 class="text-center text-success">R$ 2.620,00</h5>
                            <p class="card-text">Modernidade, essa é a palavra que define a linha EasyPC Connect. Além de ser um computador robusto, equipado com processador Intel Core i5, 8GB de memória RAM e espaço de armazenamento de 2TB ele ainda conta com grandes diferenciais da concorrência como: mouse, teclado, caixas de som sem fios e Monitor com conexão HDMI de alta resolução.</p>
                          </div>
                          <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                            <a href="#" class="btn btn-success">Comprar</a>
                          </div>
                      </div>
                    </div>        
                      
                    
                </div>
              </div> --}}
      </div>
    </div>

@endsection