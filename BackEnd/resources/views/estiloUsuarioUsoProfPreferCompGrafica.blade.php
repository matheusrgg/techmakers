@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection

@section('conteudo')

<!-- Foto de fundo após o menu principal -->
<div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(/imagens/design2.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
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
                  <a class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/3p.jpg" width="35" height="35"></a>
                  <a class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/4c.jpg" width="35" height="35"></a>
              </div>
          </div> 
          </nav>  

        </div>

        <div class="row">
          <div class="col-md-12">
            <h1 class="text-success"><b>Qual a sua preferência ?</b></h1>
          </div>
        </div>

       <!--- Início dos cards com as fotos dos Computadores  --->
       <div class="d-flex justify-content-center">

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <!-- <a href="escritoriodesktop.php"></a>   -->
            <!-- <img class="card-img-top" src="imagens/nootbokGamerF.jpg" alt=""></a> -->
             <div class="card-body">
               <h3 class="card-title text-center">
                 <a href="/estiloUsuario/UsoProfissional/Preferencia/CompGraficaDesktop">Computador Desktop</a>
               </h3>
               <p class="card-text text-center">Para você que prioriza uma tela maior, <br> alto desempenho e custo-benefício.</p>
             </div>
             <div class="card-footer text-center">
                <a href="/estiloUsuario/UsoProfissional/Preferencia/CompGraficaDesktop" class="btn btn-success">Escolher</a>
             </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <!-- <a href="escritorionotebook.php"></a> --> 
       <!--      <a><img class="card-img-top" src="imagens/pcGamerf.jpg" alt=""></a> -->
            <div class="card-body">
              <h3 class="text-dark text-center">
                <a href="/estiloUsuario/UsoProfissional/Preferencia/CompGraficaNotebook">Notebook</a>
              </h3>
              <p class="card-text text-center">Para você que precisa de mobilidade <br>e ter sempre um computador a disposição.</p>
            </div>
            <div class="card-footer text-center">
                <a href="/estiloUsuario/UsoProfissional/Preferencia/CompGraficaNotebook" class="btn btn-success">Escolher</a>
             </div>
          </div>
        </div>
        <!--- FIM dos cards com as fotos dos Computadores  --->
        </div>
      </div>
    </div>

@endsection