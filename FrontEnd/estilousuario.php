<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Configuração da aba da página -->
  <link rel="icon" href="imagens/icone_pagina1.jpg">
  <title> Estilo do Usuário </title>
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
  <div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(imagens/teclado.jpeg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
          <div class="container py-4">
            <div class="row">
              <div class="mx-auto col-lg-8 col-md-10">
                <h1 class="mb-4 display-5"br>Escolha o seu estilo de computador ideal</h1>
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

    <!--- Início do container para os ESTILOS de escolha para os usuários -->
    <div class="container">

        <!--- Início da LINHA do container -->
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="TelaGames.php"><img class="card-img-top" src="imagens/gamer.jpg" alt="Imagem do computador desktop"></a>
                  <div class="card-body">
                    <h1 class="card-title text-center">
                      <a href="TelaGames.php">Gamer</a>
                    </h1>
                    <p class="card-text">Jogos que demanda velocidade do computador, alta qualidade de placas de vídeo e internet. Som de qualidade superior e acessórios específicos.</p>
                  </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="imagens/usopessoal.jpg" alt="Imagem do computador desktop"></a>
                  <div class="card-body">
                    <h1 class="card-title text-center">
                      <a href="motivoPessoal.php">Uso Pessoal</a>
                    </h1>
                    <p class="card-text">Navegar na Internet, utilização de programas completos. Pacote completo do Office. Maior mobilidade.&nbsp;</p>
                  </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="motivoprofissional.php"><img class="card-img-top" src="imagens/usoprofissional.jpg" alt="Imagem do computador desktop"></a>
                  <div class="card-body">
                    <h1 class="card-title text-center">
                      <a href="motivoprofissional.php">Uso Profissional</a>
                    </h1>
                    <p class="card-text">Maior produtividade com programas de edição de imagem e vídeo, maior capacidade de memória.</p>
                  </div>
              </div>
            </div>

        <!--- Fim da LINHA do container -->
        </div>

      <!--- Fim do container para os ESTILOS de escolha para os usuários -->
      </div>

</main>

<?php
    include_once("footer.php");
?>

</body>

</html>
