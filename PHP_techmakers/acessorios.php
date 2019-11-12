<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Configuração da aba da página -->
  <link rel="icon" href="imagens/icone_pagina1.jpg">
  <title> Acessórios </title>
  <!-- dependências CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/wireframe.css">
</head>

<body>

<?php
  include_once("header.php");
?>

<main> 

  <!-- Foto do Banner após o menu principal -->
   <div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(imagens/acessorios.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
          <div class="container py-4">
            <div class="row">
              <div class="mx-auto col-lg-8 col-md-10">
                <h1 class="mb-4 display-5"br>Acessórios</h1>
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

   <!-- Início dos Computadores -->

   <div class="container-fluid col-md-10">

      <div class="row mt-4">
  
      <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="imagens/acessorio3.jpg" alt="Imagem do computador desktop"></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="#">Cadeira Enterprise</a>
                        </h4>
                        <h5 class="text-center text-success">R$ 1.311,00</h5>
                        <p class="card-text">Ipsum est phasellus tincidunt tristique sociosqu lobortis nibh sodales erat pharetra orci dapibus turpis, quisque orci quisque.</p>
                      </div>
                      <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                        <a href="#" class="btn btn-success">Comprar</a>
                      </div>
                  </div>
                </div>  
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="imagens/acessorio1.jpg" alt="Imagem do computador desktop"></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="#">Controle para Celular</a>
                        </h4>
                        <h5 class="text-center text-success">R$ 615,00</h5>
                        <p class="card-text">Diam cursus consequat netus tempus etiam purus eu, eleifend senectus eros habitasse viverra convallis imperdiet himenaeos</p>
                      </div>
                      <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                        <a href="#" class="btn btn-success">Comprar</a>
                      </div>
                  </div>
                </div>  
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop"></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="#">Fone Gamer Huck</a>
                        </h4>
                        <h5 class="text-center text-success">R$ 220,00</h5>
                        <p class="card-text">Lorem ipsum amet blandit quis posuere proin neque sapien nibh, maecenas dui leo feugiat aenean nullam fusce orci adipiscing mauris, facilisis ligula semper nunc facilisis maecenas bibendum non. praesent sociosqu dui porta dictumst id consequat et.</p>
                      </div>
                      <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                        <a href="#" class="btn btn-success">Comprar</a>
                      </div>
                  </div>
                </div> 
      </div>

      </div>
     <!--- Fim dos Computadores --->
     </div>

  </div>
  
  </main>

      <?php
        include_once("footer.php");
      ?>

 </body>

</html>