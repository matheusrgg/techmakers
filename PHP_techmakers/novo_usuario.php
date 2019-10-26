<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <title> TechMakers </title>
</head>

<body class="">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar6">
        <!--- Início do Logotipo --->
        <a class="navbar-brand text-primary d-none d-md-block" href="index.php">
          <img src="imagens/TechMakers_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
          <b class="text-success"> TechMakers</b>
          <!--- Fim do Logotipo --->
        </a>
      </div>
    </div>
  </nav>
  <div class="text-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <nav>
          <div class="nav-wrapper"></div>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-success mt-4"><b>Novo Cadastro</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 text-center">
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
            <a class="btn btn-success w-25 btn-lg mt-4" href="index.php" role="button">Enviar</a>
            <a class="btn btn-success w-25 btn-lg ml-5 mt-4" href="index.php" role="button">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  </body>

</html>