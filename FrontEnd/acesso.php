<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="stylesheet" href="css/wireframe.css">
    <link rel="icon" href="imagens/icone_pagina1.jpg">
    <title> Acesso </title>
</head>

<body>

    <?php
        include_once("header.php");
    ?>


  <div>
    <h1>
    </h1>
  </div>
  <div style="background-image: url(); background-size: cover;" class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5 border border-success">
          <h1 class="mb-4 text-success">Login do Usuário</h1>
          <form>
            <div class="form-group"> <input type="email" class="form-control border-success" placeholder="digite o seu email" id="form9"> </div>
            <div class="form-group mb-3"> <input type="password" class="form-control border-success" id="form10" placeholder="Digite a Senha">
              <small class="form-text text-muted text-right">
                <a href="esqueceu.php" class="text-success"> Esqueceu a sua Senha ?</a>
              </small>
            </div>
            <div class="col-md-12">
              <br>
<!--          <button type="submit" class="btn btn-success w-75">Acessar</button><br> <br>   -->
              <a class="btn btn-success w-75" href="index.php" role="button">Acessar</a>
              <div class="row">
                <div class="col-md-12 pt-2"><a href="novo_usuario.php" class="text-success"> Não tem cadastro ? Cadastre se aqui.</a></div>
              </div>
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