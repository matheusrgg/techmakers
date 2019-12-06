<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jogos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" />
</head>

<body>

  <?php
  include_once("header.php");
  ?>

  <section id="back" class="banner container">

    <!-- INÍCIO -- Numeração em sequência das páginas 1 2 3 4...   -->
    <div class="row justify-content-center">
        <nav>
          <div class="nav-wrapper pt-3">
              <div class="col s12 d-inline-flex align-items-center">
                  <a href="estilousuario.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/1p.jpg" width="35" height="35"></a>
                  <a href="telagames.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/2p.jpg" width="35" height="35"></a>
                  <a class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/3p.jpg" width="35" height="35"></a>
                  <a class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/4c.jpg" width="35" height="35"></a>
              </div>
          </div> 
        </nav>
    <!--  FIM  -- Numeração em sequência das páginas 1 2 3 4...    -->                         
    </div> 


    <h3 class=" text-center text-success" style=" margin-top: 10px">Vai Jogar o Que ??</h3>

    <div class="d-flex justify-content-center pt-3">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="imagens/Rainbow_SixF.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title text-success">
              <a href="#">Rainbow Six siege</a>
            </h4>
            <p class="card-text">Então quer dizer que você gosta de algo mais refinado </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="imagens/GTA5F.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="text-dark">
              <a href="#">grand theft auto v</a>
            </h4>
            <p class="card-text">Então você quer algo mais parrudo</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="imagens/minecraftF.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="text-dark">
              <a href="#">Minecraft</a>
            </h4>
            <p class="card-text">Então voce quer algo mais parrudo</p>
          </div>
        </div>
      </div>
  </section>
  <section class="banner container" style="
    margin-block-end: 146px">
    <div class="d-flex justify-content-center">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="imagens/RocketLeagueF.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Rocket League</a>
            </h4>
            <p class="card-text">Então quer dizer que vc gosta de joga em Notbok</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="imagens/Destiny-2F.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="text-dark">
              <a href="#">Destiny 2</a>
            </h4>
            <p class="card-text">Então voce quer algo mais parrudo</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="imagens/CSGOF.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="text-dark">
              <a href="#">counter-strike</a>
            </h4>
            <p class="card-text">Então voce quer algo mais parrudo</p>
          </div>
        </div>
      </div>
  </section>

  <!--<div class="d-flex justify-content-center">
      <button type="button" class="btn btn-dark" style="
      margin-block-end: 146px">Proximo</button>
  </div> -->

  <?php
        include_once("footer.php");
    ?>

</body>

</html>