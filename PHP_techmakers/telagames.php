<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/wireframe.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" />
  <title>Gamers</title>
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


    <section id="back" class="banner container">  

                  <!-- INÍCIO -- Numeração em sequência das páginas 1 2 3 ...   -->
                  <div class="row justify-content-center">
                      <nav>
                        <div class="nav-wrapper pb-1">
                            <div class="col s12 d-inline-flex align-items-center">
                                <a href="estilousuario.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/1p.jpg" width="35" height="35"></a>
                                <a href="#" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/2p.jpg" width="35" height="35"></a>
                                <a href="#" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/3c.jpg" width="35" height="35"></a>
                                <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/4c.jpg" width="35" height="35"></a>
                            </div>
                        </div> 
                      </nav>
                  <!--  FIM  -- Numeração em sequência das páginas 1 2 3 ...    -->                         
                  </div> 


                  <!-- INÍCIO -- Linha onde aparece a pergunta "Qual a sua preferência ?"  -->
                  <div class="row text-center">
                    <div class="col-md-12">
                      <h2 class="text-success"><b>Qual a sua preferência ?</b></h2>
                    </div>
                  <!--   FIM  -- Linha onde aparece a pergunta "Qual a sua preferência ?"  -->
                  </div>


            <!--- Início dos cards com as fotos dos Computadores  --->
            <div class="d-flex justify-content-center">

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="jogos.php"><img class="card-img-top" src="imagens/nootbokGamerF.jpg" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="jogos.php">Notebooks</a>
                        </h4>
                        <p class="card-text text-center">Então você quer mobilidade.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="jogos.php"><img class="card-img-top" src="imagens/pcGamerf.jpg" alt=""></a>
                      <div class="card-body">
                        <h4 class="text-dark text-center">
                          <a href="jogos.php">Desktops</a>
                        </h4>
                        <p class="card-text text-center">Então você quer algo mais parrudo.</p>
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