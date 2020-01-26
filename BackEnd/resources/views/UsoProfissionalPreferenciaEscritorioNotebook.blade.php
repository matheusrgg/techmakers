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
                <a href="/estiloUsuario/UsoProfissional" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/2p.jpg" width="35" height="35"></a>
                <a href="/estiloUsuario/UsoProfissional/Preferencia" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/3p.jpg" width="35" height="35"></a>
                <a class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/4p.jpg" width="35" height="35"></a>
            </div> 
          </nav>  

        </div>

        <div class="row">
          <div class="col-md-12">
            <h1 class="text-success"><b>Computadores Notebooks para uso profissional</b></h1>
          </div>
        </div>

  <!-- Início dos notebooks para ESCRITÓRIOS -->

  <div class="container">

    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/imagens/01_Escritorionotebook.jpg" alt="Imagem do computador desktop"></a>
              <div class="card-body">
                <h4 class="card-title text-center">
                  <a href="#">Notebook Positivo Celeron 4GB</a>
                </h4>
                <h5 class="text-center text-success">R$ 750,00</h5>
                <p class="card-text">Inclui aplicativos para escritório (Editor de texto, planilha eletrônica, gerenciador de apresentações, editor de imagens e editor HTML) e Antivírus Grátis por 30 dias. Não possui câmera de vídeo.</p>
              </div>
              <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                <a href="#" class="btn btn-success">Comprar</a>
              </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/imagens/03_Escritorionotebook.jpg" alt="Imagem do computador desktop"></a>
              <div class="card-body">
                <h4 class="card-title text-center">
                  <a href="#">Notebook Acer Intel 1TB</a>
                </h4>
                <h5 class="text-center text-success">R$ 2.150,00</h5>
                <p class="card-text">Possui câmera de vídeo, dois alto falantes digitais estéreo e microfone integrado.</p>
              </div>
              <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                <a href="#" class="btn btn-success">Comprar</a>
              </div>
           </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/imagens/02_Escritorionotebook.jpg" alt="Imagem do computador desktop"></a>
              <div class="card-body">
                <h4 class="card-title text-center">
                  <a href="#">Notebook Vaio Super Intel 9TB</a>
                </h4>
                <h5 class="text-center text-success">R$ 3.999,00</h5>
                <p class="card-text">Notebook de última geração, prático e veloz, com excelente capacidade de armazenamento de memória RAM de 40 GB, além de um design inovador e exclusivo, você estará sempre conectado com estilo.</p>
              </div>
              <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                <a href="#" class="btn btn-success">Comprar</a>
              </div>
           </div>
        </div>        
          
        
    </div>
   <!--- Fim dos notebooks para ESCRITÓRIOS  --->
   </div>
      </div>
    </div>

@endsection