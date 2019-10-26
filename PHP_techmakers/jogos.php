<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
</head>

<body>

<?php
  include_once("header.php");
?>

<!-- <header>
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h1Header">logo</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            Teste
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Teste</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Teste</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header> -->


    <section id="back" class="banner container">
    <h5 class="card-text text-center"> Jogos </h5>
        <div class="d-flex justify-content-center">
    <div class="col-lg-4 col-md-6 mb-4">
         <div class="card h-100">
              <a href="#"><img class="card-img-top" src="imagens/Rainbow_SixF.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Rainbow Six siege</a>
                </h4>
                <p class="card-text">Então quer dizer que vc gosta de joga em Notbok</p>
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
                <p class="card-text">Então voce quer algo mais parrudo</p>
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
    <section class="banner container">
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
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-dark">Proximo</button>
    </div>

    <?php
        include_once("footer.php");
    ?> 
    
</body>
</html>