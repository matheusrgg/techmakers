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
          <div class="nav-wrapper"></div>
        </nav>
      </div>
      <!-- <div class="text-center">
    <div class="container-fluid mb-3">
      <div class="row">
        <div class="col-md-12"><img class="d-block m-0 mx-auto" src="imagens/sequencia2.jpg" width="150"></div>
      </div> -->
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-success"><b>Qual o seu estilo ?</b></h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Início dos ESTILOS de usuários -->
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="imagens/gamer.jpg" alt="Imagem do computador desktop">
      <div class="card-body">
        <h1 class="card-title">Gamer</h1>
        <p class="card-text">Jogar jogos que demanda velocidade do computador, alta qualidade de placas de vídeo e internet. Som de qualidade superior e acessórios específicos.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="imagens/usopessoal.jpg" alt="Imagem do computador desktop">
      <div class="card-body">
        <h1 class="card-title" style="">Uso Pessoal</h1>
        <p class="card-text">Navegar na Internet, utilização de programas completos. Pacote completo do Office. Maior mobilidade.&nbsp;</p>
      </div>
    </div>
    <div class="card">
      <a href="motivoprofissional.php"><img class="card-img-top" src="imagens/usoprofissional.jpg" alt="Imagem do computador desktop"></a>
      <div class="card-body">
        <h1>Uso Profissional</h1>
        <p class="card-text">Maior produtividade com programas de edição de imagem e vídeo, maior capacidade de memória.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="imagens/outros.jpg" alt="Imagem do computador desktop">
      <div class="card-body">
        <h1>Outros</h1>
        <p class="card-text">Rimis pellentesque fames hac curae sagittis lobortis curabitur inceptos, justo etiam sit feugiat arcu sodales venenatis. nam vivamus molestie odio in quisque cursus accumsan etia.</p>
      </div>
    </div>
    <!-- Fim dos ESTILOS de usuários -->
  </div>


</main>

<?php
    include_once("footer.php");
?>

</body>

</html>