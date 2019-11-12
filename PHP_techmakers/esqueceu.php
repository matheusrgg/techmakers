<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="stylesheet" href="css/wireframe.css">
    <link rel="icon" href="imagens/icone_pagina1.jpg">
    <title> TechMakers </title>
</head>

<body>

     <?php
        include_once("header.php");
     ?>

    <main> 


  <div>
    <h1></h1>
  </div>

  <div style="background-image: url(); background-size: cover;" class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5 border border-success rounded">
          <h1 class="text-success m-0">Trocar a Senha</h1>
          <h5 class="form-text text-muted text-center my-3">
            <a class="text-success">Identifique-se para receber um e-mail com as<br>instruções e o link para criar uma nova senha.</a>
          </h5>
          <form class="">
            <div class="form-group"> <input type="email" class="form-control border-success" placeholder="digite o seu email" id="form9"> </div>
            <div class="col-md-12 d-inline-flex justify-content-center">
              <br>
              <!-- <button type="submit" class="btn btn-success w-75">Acessar</button><br> <br>             -->
              <!-- <a class="btn btn-success w-25 btn-lg" href="index.php" role="button">Enviar</a>  
                   <a class="btn btn-success w-25 btn-lg ml-5" href="index.php" role="button">Cancelar</a>  -->
                   <a class="btn btn-success col-lg-4 col-md-4 col-sm-1 mt-2 mr-3 " href="index.php" role="button">Enviar</a>
                   <a class="btn btn-success col-lg-4 col-md-4 col-sm-1 mt-2 ml-3" href="index.php" role="button">Cancelar</a>

            </div>
          </form>
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