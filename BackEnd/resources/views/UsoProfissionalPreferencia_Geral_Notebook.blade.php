@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection

@section('conteudo')

<!-- Foto de fundo após o menu principal -->
<div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(/imagens/matrix1.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
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
            <h1 class="text-success"><b>Computadores notebooks para desenvolvimento Geral</b></h1>
          </div>
        </div>

  <!-- Início dos notebooks para Desenvolvimento Geral -->

  <div class="container">

    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/imagens/01_androidnotebook.jpg" alt="Imagem do computador desktop"></a>
              <div class="card-body">
                <h4 class="card-title text-center">
                  <a href="#">Notebook Standard I</a>
                </h4>
                <h5 class="text-center text-success">R$ 2.700,00</h5>
                <p class="card-text">Lorem ipsum nulla ipsum himenaeos pellentesque magna dui accumsan dui ligula erat dolor, sociosqu dictumst mattis at eros facilisis pharetra neque metus proin. a nulla mattis lacus facilisis semper potenti aliquet pretium elit neque velit.</p>
              </div>
              <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                <a href="#" class="btn btn-success">Comprar</a>
              </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/imagens/03_androidnotebook.jpg" alt="Imagem do computador desktop"></a>
              <div class="card-body">
                <h4 class="card-title text-center">
                  <a href="#">Notebook Ching Pon</a>
                </h4>
                <h5 class="text-center text-success">R$ 3.450,00</h5>
                <p class="card-text">rimis pellentesque fames hac curae sagittis lobortis curabitur inceptos, justo etiam sit feugiat arcu sodales venenatis. nam vivamus molestie odio in quisque cursus accumsan etia.</p>
              </div>
              <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                <a href="#" class="btn btn-success">Comprar</a>
              </div>
           </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/imagens/02_androidnotebook.jpg" alt="Imagem do computador desktop"></a>
              <div class="card-body">
                <h4 class="card-title text-center">
                  <a href="#">Notebook Narnia Maximum</a>
                </h4>
                <h5 class="text-center text-success">R$ 6.970,00</h5>
                <p class="card-text">Lorem ipsum nulla ipsum himenaeos pellentesque magna dui accumsan dui ligula erat dolor, sociosqu dictumst mattis at eros facilisis pharetra neque metus proin. a nulla mattis lacus facilisis semper potenti aliquet pretium elit neque velit.</p>
              </div>
              <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                <a href="#" class="btn btn-success">Comprar</a>
              </div>
           </div>
        </div>           
    </div>
   <!--- Fim dos notebooks para Desenvolvimento Geral  --->
   </div>
      </div>
    </div>

@endsection