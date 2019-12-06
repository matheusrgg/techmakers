<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="stylesheet" href="css/wireframe.css">
    <link rel="icon" href="imagens/icone_pagina1.jpg">
    <title> Cadastro de Produto </title>
</head>


<body>

    <?php
        include_once("header_adm.php");
    ?>

     <main>

          <div class="row text-center container-fluid pb-3">
            <div class="col-md-12">
              <h1 class="text-success mt-2"><b>Cadastrar Produto</b></h1>
            </div>
          </div>


<!------ Início do Formulário de Cadastro de Produto ------>
<div class="py-3 text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12 p-4 border rounded border-success">

            <form>
              <div class="form-row">
                <div class="form-group col-md-6 py-3"> <input type="text" class="form-control border-success form-control-lg" id="form39" placeholder="Descrição do Produto" required="required"> </div>
                <div class="form-group col-md-6 py-3"> <input type="text" class="form-control border-success form-control-lg" id="form40" placeholder="Categoria" required="required"> </div>
              </div>

              <div class="form-row">                
                <div class="form-group col-md-6 py-3"> <input type="number" class="form-control border-success form-control-lg" id="form40" placeholder="Quantidade" required="required"> </div>
                <div class="form-group col-md-6 py-3"> <input type="text" class="form-control border-success form-control-lg" id="form40" placeholder="Preço Unitário" required="required"> </div>
             </div>

              <!-- <button type="submit" class="btn btn-success btn-lg w-25 mr-5">Enviar</button>
                    <button type="submit" class="btn btn-success btn-lg w-25 ml-5">Cancelar</button>   -->
              <a class="btn btn-success w-25 btn-lg" href="ListaProdutos.php" role="button">Cadastrar</a>
              <a class="btn btn-success w-25 btn-lg ml-5" href="ListaProdutos.php" role="button">Listar</a>
            </form>

          </div>
        </div>
      </div>
      <!------ Fim do Formulário de Cadastro de Usuário ------>
      </div>

  </main>
  
 </body>

</html>