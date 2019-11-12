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

   <div class="text-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <nav>
          <div class="nav-wrapper"></div>
        </nav>
      </div>

      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="text-success mt-4"><b>Novo Cadastro</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 mb-5 mr-2 ml-2 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-4 border rounded border-success">
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group col-md-12"> <input type="text" class="form-control border-success rounded" id="form19" placeholder="Nome"> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group col-md-12"> <input type="email" class="form-control border-success rounded" id="form20" placeholder="Email"> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group col-md-12"> <input type="password" class="form-control border-success rounded mt-3" id="form19" placeholder="Digite uma senha"> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group col-md-12"> <input type="password" class="form-control border-success rounded mt-3" id="form20" placeholder="Confirme a senha"> </div>
              </div>
            </div>
            <!-- <button type="submit" class="btn btn-success btn-lg w-25 mr-5">Enviar</button>
                 <button type="submit" class="btn btn-success btn-lg w-25 ml-5">Cancelar</button>   -->
            <div class="row">
                <a class="btn btn-success col-lg-4 col-md-4 col-sm-1 mt-2 m-auto" href="index.php" role="button">Enviar</a>
                <div class="espaco my-4"></div>
                <a class="btn btn-success col-lg-4 col-md-4 col-sm-1 mt-2 m-auto" href="index.php" role="button">Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

      <?php
        include_once("footer.php");
      ?>


  </body>

</html>