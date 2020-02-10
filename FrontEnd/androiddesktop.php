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
                  <a href="androidpreferencia.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/3p.jpg" width="35" height="35"></a>
                  <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/4p.jpg" width="35" height="35"></a>
                </div>
              </div>
            </nav>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h1 class="text-success"><b>Computadores desktops para desenvolvimento geral</b></h1>
            </div>
          </div>
        </div>
      </div>


      <!-- Início dos Computadores Desktops para Desenvolvimento Geral -->

      <div class="container">

          <div class="row">
      
              <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="imagens/01_androidDesktop.jpg" alt="Imagem do computador desktop"></a>
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
                    <a href="#"><img class="card-img-top" src="imagens/03_androidDesktop.jpg" alt="Imagem do computador desktop"></a>
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
                    <a href="#"><img class="card-img-top" src="imagens/02_androidDesktop.jpg" alt="Imagem do computador desktop"></a>
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

   </main>

   <?php
      include_once("footer.php");
   ?>

</html>