@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection 

@section('conteudo')

<main style="background-image: url(/imagens/bg-body.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;"> 

  <!-- Foto da Matrix de fundo após o menu principal -->
  <main>
    <div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: url(/imagens/banner-gamer-selector.png); background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
          <div class="container py-4">
            <div class="row">
              <div class="mx-auto col-lg-8 col-md-10">
                <h1 class="mb-4 display-5"br>'</h1>
              </div>
            </div>
          </div>
</div>
  <div class="text-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <nav>
          <div class="nav-wrapper"></div>
        </nav>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h1 class="text-success"><b></b></h1>
        </div>
      </div>
    </div>
  </div>
    </main>
  <div class="text-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <!-- <nav>
          <div class="nav-wrapper">
            <div class="col s12 d-inline-flex align-items-center">
              <a href="estilousuario.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/1p.jpg" width="35" height="35"></a>
              <a href="motivoprofissional.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/2p.jpg" width="35" height="35"></a>
              <a href="preferenciaprofissional.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/3p.jpg" width="35" height="35"></a>
              <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/4p.jpg" width="35" height="35"></a>
            </div>
          </div>
        </nav> -->
      </div>
      <!-- <div class="text-center">
    <div class="container-fluid mb-3">
      <div class="row">
        <div class="col-md-12"><img class="d-block m-0 mx-auto" src="imagens/sequencia2.jpg" width="150"></div>
      </div> -->
      <div class="row" style="margin:15px">
        <div class="col-md-12">
          <h1 class="text-success"><b>Desktops Gamer</b></h1>
        </div>
      </div>
    </div>
  </div>


         <!-- Início dos GAMERS DESKTOPS usando ForEach -->
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
       <!--- Fim dos dos GAMERS DESKTOPS usando ForEach --->  
  

            {{-- <div class="container">

              <div class="row">

                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="/imagens/pc-gamer-cs-1.png" alt="Imagem do computador desktop"></a>
                        <div class="card-body">
                          <h4 class="card-title text-center">
                            <a href="#">PC Gamer TechMakers ALPHA</a>
                          </h4>
                          <h5 class="text-center text-success">R$ 520,00</h5>
                          <p class="card-text"> Placa de Vídeo RTX 2060 6GB,  (LGA 1151) INTEL CORE I5 8400 2.8GHz, PLACA MÃE B360, (8GB) MEMORIA (1X8GB) DDR4,  1000GB HD SATA,  GABINETE COOLER MASTER Q300P- MCB-Q300P-KANN-S02 </p>
                        </div>
                        <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                          <a href="#" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="/imagens/pc-gamer-cs-2.png" alt="Imagem do computador desktop"></a>
                        <div class="card-body">
                          <h4 class="card-title text-center">
                            <a href="#">Easypc Smart com caixa de som - Intel Core dual 1TB</a>
                          </h4>
                          <h5 class="text-center text-success">R$ 1.550,00</h5>
                          <p class="card-text"> PROCESSADOR AMD RYZEN 5 3400G 3.7GHZ (4.2GHZ TURBO),  (4GB) MEMORIA DDR4 2666MHZ, 1000GB HD SATA, GABINETE GAMEMAX ECO - LATERAL FULL WINDOW + 3 FAN 32-LED VERMELHO </p>
                        </div>
                        <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                          <a href="#" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="/imagens/pc-gamer-cs-3.jpg" alt="Imagem do computador desktop"></a>
                        <div class="card-body">
                          <h4 class="card-title text-center">
                            <a href="#">PC Gamer INFINITO - GEFORCE GTX1660 6GB / INTEL CORE I3 8100 / 8GB DDR4 / INFINIT BRANCO</a>
                          </h4>
                          <h5 class="text-center text-success">R$ 2.620,00</h5>
                          <p class="card-text">(LGA 1151) INTEL CORE I3 8110 3.5GHz 6MB CACHE, PLACA MÃE H310, (8GB) MEMORIA DDR4 2666MHZ, 1000GB HD SATA,  GAMEMAX - INFINIT BRANCO RGB - 3 FAN RGB 21 LED - LATERAL VIDRO FULL WINDOW </p>
                        </div>
                        <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                          <a href="#" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                  </div>        
                    
                  
              </div>
            </div> --}}

   </main>

@endsection