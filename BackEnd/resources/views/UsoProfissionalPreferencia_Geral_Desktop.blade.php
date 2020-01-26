@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection

@section('conteudo')

<!-- Foto de fundo após o menu principal -->
<div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('/imagens/matrix1.jpg');  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
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
                <a href="/estiloUsuario/UsoProfissional" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/2p.jpg" width="35" height="35"></a>
                <a href="/estiloUsuario/UsoProfissional/Preferencia_Geral" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/3p.jpg" width="35" height="35"></a>
                <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/4p.jpg" width="35" height="35"></a>              </div>
          </div> 
          </nav>  

        </div>

        <div class="row">
          <div class="col-md-12">
            <h1 class="text-success"><b>Computadores desktops para desenvolvimento iOS</b></h1>
          </div>
        </div>

<!-- Início dos Computadores Desktops para DESENVOLVIMENTO GERAL -->

<div class="container">

  <div class="row">

      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/imagens/01_androidDesktop.jpg" alt="Imagem do computador desktop"></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="#">Computador Alpha Trom</a>
              </h4>
              <h5 class="text-center text-success">R$ 7.000,00</h5>
              <p class="card-text">Lorem ipsum nulla ipsum himenaeos pellentesque magna dui accumsan dui ligula erat dolor, sociosqu dictumst mattis at eros facilisis pharetra neque metus proin. a nulla mattis lacus facilisis semper potenti aliquet pretium elit neque velit.</p>
            </div>
            <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
              <a href="#" class="btn btn-success">Comprar</a>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/imagens/03_androidDesktop.jpg" alt="Imagem do computador desktop"></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="#">Computador Medium Royal</a>
              </h4>
              <h5 class="text-center text-success">R$ 10.150,00</h5>
              <p class="card-text">Tristique bibendum mollis platea ad eu etiam, aliquet et condimentum nibh vivamus, mattis elit imperdiet habitant libero. mollis id quam curabitur quisque ante commodo rutrum torquent, nunc eu nisl etiam quis adipiscing himenaeos.</p>
            </div>
            <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
              <a href="#" class="btn btn-success">Comprar</a>
            </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/imagens/02_androidDesktop.jpg" alt="Imagem do computador desktop"></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="#">Computador Super Omega</a>
              </h4>
              <h5 class="text-center text-success">R$ 13.470,00</h5>
              <p class="card-text">Lorem ipsum nulla ipsum himenaeos pellentesque magna dui accumsan dui ligula erat dolor, sociosqu dictumst mattis at eros facilisis pharetra neque metus proin. a nulla mattis lacus facilisis semper potenti aliquet pretium elit neque velit.</p>
            </div>
            <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
              <a href="#" class="btn btn-success">Comprar</a>
            </div>
        </div>
      </div>           
  </div>
<!--- Fim dos Computadores Desktops para Desenvolvimento Geral  --->
</div>  

      </div>
    </div>

@endsection