<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Configuração da aba da página -->
  <link rel="icon" href="imagens/icone_pagina1.jpg">
  <title> Uso Profissional - Motivo </title>
  <!-- dependências CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/wireframe.css">
</head>

<body>

    <?php
      include_once("header.php");
    ?>

  <main>
    <!-- Foto de fundo após o menu principal -->
    <div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(imagens/bannercomputadorprof.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
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
              <div class="col s12 d-inline-flex align-items-center"
                  style="margin:15px">
                <a href="estilousuario.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/1p.jpg" width="35" height="35"></a>
                <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/2p.jpg" width="35" height="35"></a>
                <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/3c.jpg" width="35" height="35"></a>
                <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/4c.jpg" width="35" height="35"></a>
              </div>
            </div>
          </nav>  

        </div>

        <div class="row">
          <div class="col-md-12">
            <h1 class="text-success"><b>Qual o seu objetivo profissional ?</b></h1>
          </div>
        </div>

        <!-- Início dos 4 tipos de MOTIVOS profissionais -->
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h4 style=color:green class="card-title">Tarefas do dia a dia <br> de um escritório</h3>
              <p class="card-text">Usar internet e Microsoft Office <br> Assistir vídeos e utilizar programas completos.</p>
            </div>
            <div class="card-footer">
              <a href="preferenciaprofissional.php" class="btn btn-success">Escolher</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 style=color:green class="card-title">Computação Gráfica, <br> Design ou Marketing</h3>
              <p class="card-text">Rodar e editar vídeos de alta definição.<br>Criar mídia, audio e animações em 3D.<br>Usar programas como Autocad, Photoshop, CorelDraw ou Illustrator.</p>
            </div>
            <div class="card-footer">
              <a href="computacaopreferencia.php" class="btn btn-success">Escolher</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 style=color:green class="card-title">Desenvolvimento para iOS</h5>
              <p class="card-text">Criar sistemas para os equipamentos Apple.</p>
            </div>
            <div class="card-footer">
              <a href="iospreferencia.php" class="btn btn-success">Escolher</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 style=color:green class="card-title">Desenvolvimento Geral</h5>
              <p class="card-text">Criar sites e sistemas Web. <br> Desenvolver aplicativos para Android.</p>
            </div>
            <div class="card-footer">
              <a href="androidpreferencia.php" class="btn btn-success">Escolher</a>
            </div>
          </div>
          <!-- Fim dos 4 tipos de MOTIVOS profissionais -->
        </div>
      </div>
    </div>

  </main>

      <?php
        include_once("footer.php");
      ?>

  <!--- Scripts JavaScripts necessários para funcionar alguns estilos do Bootstrap --->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
</body>

</html>