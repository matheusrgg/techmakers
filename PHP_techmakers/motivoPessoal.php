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
      
      <!-- Incluido no container, um padding de pb-5 para não ficar grudado no footer da página. -->
      <div class="container-fluid pb-5">

        <div class="row justify-content-center">


          <nav>
            <div class="nav-wrapper">
              <div class="col s12 d-inline-flex align-items-center">
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
            <h1 class="text-success"><b>Qual o seu objetivo pessoal ?</b></h1>
          </div>
        </div>

        <!-- Início dos 4 tipos de MOTIVOS pessoais -->
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Editar documentos <br> com o Pacote Office </h5>
              <p class="card-text">Usar internet, Microsoft Office e MS Project. </p>
            </div>
            <div class="card-footer">
              <a href="preferenciaprofissional.php" class="btn btn-success">Escolher...</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Entretenimento </h5>
              <p class="card-text">Ver video no Youtube e Netflix.<br>Redes Sociais<br>Executar vários programas ao mesmo tempo. Usar Autocad, Photoshop, CorelDraw ou Illustrator.</p>
            </div>
            <div class="card-footer">
              <a href="computacaopreferencia.php" class="btn btn-success">Escolher...</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pagar contas do Banco</h5>
              <p class="card-text">Organizar planilhas e pagar impostos</p>
            </div>
            <div class="card-footer">
              <a href="iospreferencia.php" class="btn btn-success">Escolher...</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Outros</h5>
              <p class="card-text">#</p>
            </div>
            <div class="card-footer">
              <a href="androidpreferencia.php" class="btn btn-success">Escolher...</a>
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