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

 
    <!-- Início -- Foto Matrix de fundo no banner e Título "Vamos te ajudar..." que aparece em cima do banner   -->
    <div class="text-center mx-3 mb-3" style="background-image: url('imagens/matrix1.jpg');background-size:cover;">
        <div class="container">
          <div class="row">
            <div class="mx-auto">
              <h1 class="display-5 text-light">Vamos te ajudar <br>a encontrar o seu computador Gamer !</h1>
            </div>
          </div>
        </div>
    <!-- Fim -- Foto Matrix de fundo no banner e Título "Vamos te ajudar..." que aparece em cima do banner   -->    
    </div>


    <section id="back" class="banner container mb-4 pb-5">
  
                  <!-- INÍCIO -- Numeração em sequência das páginas 1 2 3 ...   -->
                  <div class="row justify-content-center">
                      <nav>
                        <div class="nav-wrapper">
                            <div class="col s12 d-inline-flex align-items-center">
                                <a href="estilousuario.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/1p.jpg" width="35" height="35"></a>
                                <a href="motivoprofissional.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/2p.jpg" width="35" height="35"></a>
                                <a class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/3p.jpg" width="35" height="35"></a>
                                <a class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/4c.jpg" width="35" height="35"></a>
                            </div>
                        </div> 
                      </nav>
                  <!--  FIM  -- Numeração em sequência das páginas 1 2 3 ...    -->                         
                  </div> 


                  <!-- INÍCIO -- Linha onde aparece a pergunta "Qual a sua preferência ?"  -->
                  <div class="row text-center">
                    <div class="col-md-12 pt-1 pb-3">
                      <h2 class="text-success">Qual a sua preferência ?</h2>
                    </div>
                  <!--   FIM  -- Linha onde aparece a pergunta "Qual a sua preferência ?"  -->
                  </div>

                  <!--- Início dos cards com as fotos dos Computadores  --->
                  <div class="d-flex justify-content-center">

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <!-- <img class="card-img-top" src="imagens/nootbokGamerF.jpg" alt=""></a> -->
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="androiddesktop.php">Computador Desktop</a>
                        </h4>
                        <p class="card-text text-center">Para você que prioriza uma tela maior, <br> alto desempenho e custo-benefício.</p>
                      </div>
                      <div class="card-footer text-center">
                          <a href="androiddesktop.php" class="btn btn-success">Escolher...</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                  <!--      <a><img class="card-img-top" src="imagens/pcGamerf.jpg" alt=""></a> -->
                      <div class="card-body">
                        <h4 class="text-dark text-center">
                          <a href="androidnotebook.php">Notebook</a>
                        </h4>
                        <p class="card-text text-center">Para você que precisa de mobilidade <br>e ter sempre um computador a disposição.</p>
                      </div>
                      <div class="card-footer text-center">
                          <a href="androidnotebook.php" class="btn btn-success">Escolher...</a>
                      </div>
                    </div>
                  </div>
                  <!--- FIM dos cards com as fotos dos Computadores  --->
                  </div>

      </section>                    


<?php
  include_once("footer.php");
?>

</body>

</html>