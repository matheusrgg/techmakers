<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="stylesheet" href="css/wireframe.css">
    <link rel="icon" href="imagens/icone_pagina1.jpg">
    <title> Contato </title>
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
              <h1 class="display-5 text-light">Tem alguma dúvida ?&nbsp;<br>Entre em contato conosco !</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <nav>
              <div class="nav-wrapper"></div>
            </nav>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h1 class="text-success"><b>Contato</b></h1>
            </div>
          </div>
        </div>
      </div>

      <!------ Início do Formulário de CONTATO ------>
      <div class="py-3 text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12 p-4 border rounded border-success">

              <form>
                <div class="form-group"> <input type="text" class="form-control form-control-sm border-success" id="form39" placeholder="Nome" required="required"> </div>
                <div class="form-row">
                  <div class="form-group col-md-6"> <input type="email" class="form-control form-control-sm border-success" id="form40" placeholder="Email" required="required"> </div>
                  <div class="form-group col-md-6"> <input type="number" class="form-control form-control-sm border-success" id="form41" placeholder="Fone (opcional)"> </div>
                </div>
                <div class="form-group"> <input type="text" class="form-control form-control-sm border-success" id="form42" placeholder="Assunto" required="required"> </div>
                <div class="form-group"> <textarea class="form-control form-control-sm border-success" id="form43" rows="3" placeholder="Sua mensagem"></textarea> </div>

                <!-- <button type="submit" class="btn btn-success btn-lg w-25 mr-5">Enviar</button>
                    <button type="submit" class="btn btn-success btn-lg w-25 ml-5">Cancelar</button>   -->

                <a class="btn btn-success w-25 btn-lg" href="index.php" role="button">Enviar</a>
                <a class="btn btn-success w-25 btn-lg ml-5" href="index.php" role="button">Cancelar</a>            
              </form>

            </div>
          </div>
        </div>
        <!------ Fim do Formulário de CONTATO ------>
      </div>

  </main>

      <?php
        include_once("footer.php");
      ?>
  
 </body>

</html>