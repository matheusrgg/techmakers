<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <title> TechMakers </title>
</head>

<body>
  <!--- Início do navbar principal --->
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar6">
        <!--- Início do Logotipo --->
        <a class="navbar-brand text-primary d-none d-md-block" href="painel_adm/PainelAdm.php">
          <img src="imagens/TechMakers_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
          <b class="text-success"> TechMakers</b>
          <!--- Fim do Logotipo --->
        </a>
      </div>
    </div>
    <!--- Fim do navbar principal--->
  </nav>
  <div>
    <h1>
    </h1>
  </div>
  <div style="background-image: url(); background-size: cover;" class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5 border border-success rounded-circle">
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style="">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" style="">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style="">
  </script>
  </body>
</html>