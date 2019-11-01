<!DOCTYPE html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  </head>

  <body>

      <?php
        include_once("header.php");
      ?>

      <main> 

        <!--- Inicío da Foto de Abertura (matrix1.jpg) e das 2 opcões de escolha para o usúario:
              Quero Ajuda... e Quero Escolher...   --->
        <div class="py-5 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(imagens/matrix1.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
          <div class="container py-5">
            <div class="row">
              <div class="mx-auto col-lg-8 col-md-10">
                <p class="lead mb-5">Compre o computador ideal para você!</p>
                <h1 class="mb-4 display-5">TechMakers<br>O seu coputador personalizado</h1>
                <a class="btn btn-success" href="estilousuario.php" role="button">Quero ajuda para escolher meu computador</a>
                <a class="btn btn-secondary" href="ecommerce.php" role="button">Quero escolher as peças do meu computador</a>
              </div>
            </div>
          </div>
        <!--- Fim da Foto de Abertura e das 2 opções de escolha para o usuário. --->
        </div>

        <!--- Início das Ofertas publicadas na tela HOME --->
        <div>
          <h1 class="mb-4 display-4 text-center text-success">Ofertas<h1>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="imagens/pcGamer_kit.jpg" alt="Imagem do computador desktop"></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="#">Kit da Hora PC Gamer</a>
                        </h4>
                        <h5 class="text-center text-success">R$ 311,00</h5>
                        <p class="card-text">Ipsum est phasellus tincidunt tristique sociosqu lobortis nibh sodales erat pharetra orci dapibus turpis, quisque orci quisque.</p>
                      </div>
                      <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                        <a href="#" class="btn btn-success">Comprar</a>
                      </div>
                  </div>
                </div>  
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="imagens/pcGamer.jpg" alt="Imagem do computador desktop"></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="#">PC Turbo Gamer</a>
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
        
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="imagens/01_EscritorioDesktop.jpg" alt="Imagem do computador desktop"></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="#">Easypc Smart Básico</a>
                        </h4>
                        <h5 class="text-center text-success">R$ 820,00</h5>
                        <p class="card-text">Este é feito sob medida para que você extraia o máximo da sua produtividade no trabalho. Ele também proporciona conectividade sem igual para você navegar pela internet, assistir filmes, ou se comunicar com seus amigos e familiares com velocidade e fluidez. Interaja com os seus dispositivos portáteis através das conexões Hdmi, Hd Áudio de 5.1 canais ou conexão de rede de alta velocidade de 1GBPS.</p>
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
          </div> 
          </div>

      </main>

      <?php
        include_once("footer.php");
      ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

  </body>

</html>