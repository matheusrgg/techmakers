<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Configuração da aba da página -->
  <link rel="icon" href="imagens/icone_pagina1.jpg">
  <title> Uso Profissional - Preferência </title>
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
              <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/3p.jpg" width="35" height="35"></a>
              <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/4c.jpg" width="35" height="35"></a>
            </div>
          </div>
        </nav>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h1 class="text-success"><b>Qual a sua preferência ?</b></h1>
        </div>
      </div>
      <!-- Início dos 2 tipos de PREFERÊNCIAS -->
      <div class="card-deck">
        <div class="card">
          <!--                  <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card"> -->
          <div class="card-body">
            <h5 class="card-title">Computador Desktop</h5>
            <p class="card-text">Para você que prioriza uma tela maior, <br> alto desempenho e custo-benefício.</p>
          </div>
          <div class="card-footer">
            <a href="iosdesktop.php" class="btn btn-success">Escolher...</a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Notebook</h5>
            <p class="card-text">Para você que precisa de mobilidade <br>e ter sempre um computador a disposição.</p>
          </div>
          <div class="card-footer">
            <a href="iosnotebook.php" class="btn btn-success">Escolher...</a>
          </div>
        </div>
      </div>
    </div>
  </div>

      </main>

      <?php
        include_once("footer.php");
      ?>

</body>

</html>