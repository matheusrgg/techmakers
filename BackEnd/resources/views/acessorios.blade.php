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

        <!-- Início dos Acessórios usando ForEach -->
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
       <!--- Fim dos Acessórios  usando ForEach --->
</div>
</div>

  @endsection