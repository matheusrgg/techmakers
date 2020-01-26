@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection

<!-- @section('bg')
style="background-image: url(imagens/bg-body.jpg)"
@endsection -->

@section('conteudo')

  <!-- Foto de fundo após o menu principal -->
<div class="py-4 text-center text-white h-100 align-items-center d-flex"
style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(/imagens/pecas-computador.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
<div class="container py-4">
  <div class="row">
    <div class="mx-auto col-lg-8 col-md-10">
      <h1 class="mb-4 display-5"br>Escolha os seus acessórios</h1>
    </div>
  </div>
</div>
</div>

<div class="text-center">

<!-- Incluido no container, um padding de pb-5 para não ficar grudado no footer da página. -->
<div class="container-fluid pb-5">

<div class="row justify-content-center">

</div>

<div class="row"  style="margin:15px">
  <!--<div class="col-md-12">
    <h1 class="text-success"><b>Acessórios</b></h1>
  </div>  -->
  </div>

<!-- Início dos Acessórios  -->

<div class="container">

<div class="row">

<div class="col-lg-4 col-md-6 mb-4">
<div class="card h-100">
  <a href="#"><img class="card-img-top" src="/imagens/acessorio1.jpg" alt="Imagem do computador desktop"></a>
  <div class="card-body">
    <h4 class="card-title text-center">
      <a href="#">Controle Zitron Turbo</a>
    </h4>
    <h5 class="text-center text-success">R$ 750,00</h5>
    <p class="card-text">Conta com setas mecânicas, incluindo duas portas USB 3.1 Type-A de 1ª geração. Possui gravador e reprodutor de som.</p>
  </div>
  <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
    <a href="#" class="btn btn-success">Comprar</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-6 mb-4">
<div class="card h-100">
  <a href="#"><img class="card-img-top" src="/imagens/acessorio2.jpg" alt="Imagem do computador desktop"></a>
  <div class="card-body">
    <h4 class="card-title text-center">
      <a href="#">Estação Gamer Star Trek</a>
    </h4>
    <h5 class="text-center text-success">R$ 8.000,00</h5>
    <p class="card-text">Para ajudar nos jogos que fazem uso intenso de hardware, como criação e edição de fotos/vídeos e experiências imersivas com 3D. Disco Rígido de 20TB e 500GB de Ssd.</p>
  </div>
  <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
    <a href="#" class="btn btn-success">Comprar</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-6 mb-4">
<div class="card h-100">
  <a href="#"><img class="card-img-top" src="/imagens/foneGamer.png" alt="Imagem do computador desktop"></a>
  <div class="card-body">
    <h4 class="card-title text-center">
      <a href="#">Gamer Fone Asterix</a>
    </h4>
    <h5 class="text-center text-success">R$ 480,00</h5>
    <p class="card-text">Excelente performace e permite várias conexões com outras plataformas de multimidia.</p>
  </div>
  <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
    <a href="#" class="btn btn-success">Comprar</a>
  </div>
</div>
</div>        


</div>
<!--- Fim dos Acessórios --->
</div>
</div>
</div>




  @endsection