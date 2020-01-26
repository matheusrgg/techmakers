<!DOCTYPE html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <title> Lista de Produtos </title>
  </head>

  <body>

      <?php
        include_once("header_adm.php");
      ?>

<main>

<div class="row text-center container-fluid pb-3">
  <div class="col-md-12">
    <h1 class="text-success mt-2"><b>Lista de Produtos</b></h1>
  </div>
</div>

 <div>
    <table class="table-bordered table-striped w-100">  
      <thead class="text-center">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Descrição</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Preço Unitário</th>
          <th scope="col" class="">Ações <br> <a class="btn btn-warning btn-sm mb-1" href="CadastrarProduto.php">&nbsp; CADASTRAR &nbsp;&nbsp;</a></th>
        </tr>
      </thead>
      <tbody class="text-center" >
        <tr>
          <th scope="row">1</th>
          <td>Placa de Video Asus</td>
          <td>Acessórios</td>
          <td>20</td>
          <td>R$ 697,80</td>
          <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>MacBookPro</td>
          <td>Notebook</td>
          <td>35</td>
          <td>R$ 9.000,00</td>
          <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Fortinite PS4</td>
          <td>Jogos</td>
          <td>118</td>
          <td>R$ 200,00</td>
          <td class="w-25"><a class="btn btn-secondary  mb-1 mt-1 btn-sm" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Fifa 2019</td>
          <td>Jogos</td>
          <td>300</td>
          <td>R$ 315,00</td>
          <td class="w-25"><a class="btn btn-secondary btn-sm  mb-1 mt-1" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Computador Sony Vaio</td>
          <td>Notebook</td>
          <td>178</td>
          <td>R$ 5.789,00</td>
          <td class="w-25"><a class="btn btn-secondary btn-sm  mb-1 mt-1" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Computador LG</td>
          <td>Notebook</td>
          <td>18</td>
          <td>R$ 4.789,00</td>
          <td class="w-25"><a class="btn btn-secondary btn-sm  mb-1 mt-1" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
          <tr>
          <th scope="row">7</th>
          <td>Computador Pro Gamer</td>
          <td>Notebook</td>
          <td>34</td>
          <td>R$ 1.789,00</td>
          <td class="w-25"><a class="btn btn-secondary btn-sm  mb-1 mt-1" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Computador Positivo</td>
          <td>Notebook</td>
          <td>100</td>
          <td>R$ 1.789,00</td>
          <td class="w-25"><a class="btn btn-secondary btn-sm  mb-1 mt-1" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Computador MacBook</td>
          <td>Notebook</td>
          <td>300</td>
          <td>R$ 15.000,00</td>
          <td class="w-25"><a class="btn btn-secondary btn-sm  mb-1 mt-1" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Computador Itautec</td>
          <td>Notebook</td>
          <td>3</td>
          <td>R$ 1.500,00</td>
          <td class="w-25"><a class="btn btn-secondary btn-sm  mb-1 mt-1" href="EditarProduto.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
        </tr>
      </tbody>      
    </table>
</div>

</main>

  </body>

</html>

