<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Configuração da aba da página -->
  <link rel="icon" href="imagens/icone_pagina1.jpg">
  <title> Uso Profissional - Desktop </title>
  <!-- dependências CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/wireframe.css">
</head>

<body>

<?php
  include_once("header.php");
?>

<main> 

  <!-- Foto da Matrix de fundo após o menu principal -->
  <div class="text-center mx-3 mb-3" style="background-image: url('imagens/matrix1.jpg');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="mx-auto">
          <h1 class="display-5 text-light">Vamos te ajudar <br>a encontrar o seu computador ideal</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <nav>
          <div class="nav-wrapper">
            <div class="col s12 d-inline-flex align-items-center">
              <a href="estilousuario.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/1p.jpg" width="35" height="35"></a>
              <a href="motivoprofissional.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/2p.jpg" width="35" height="35"></a>
              <a href="preferenciaprofissional.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/3p.jpg" width="35" height="35"></a>
              <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/4p.jpg" width="35" height="35"></a>
            </div>
          </div>
        </nav>
      </div>
      <!-- <div class="text-center">
    <div class="container-fluid mb-3">
      <div class="row">
        <div class="col-md-12"><img class="d-block m-0 mx-auto" src="imagens/sequencia2.jpg" width="150"></div>
      </div> -->
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-success"><b>Computadores desktops para uso profissional</b></h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Início dos Computadores Desktops para ESCRITÓRIOS -->

  <div class="container">

    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="imagens/01_EscritorioDesktop.jpg" alt="Imagem do computador desktop"></a>
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
              <a href="#"><img class="card-img-top" src="imagens/03_EscritorioDesktop.jpg" alt="Imagem do computador desktop"></a>
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
              <a href="#"><img class="card-img-top" src="imagens/02_EscritorioDesktop.jpg" alt="Imagem do computador desktop"></a>
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
   <!--- Fim dos Computadores Desktops para ESCRITÓRIOS  --->
   </div>

   </main>

<?php
  include_once("footer.php");
?>

 </body>

</html>