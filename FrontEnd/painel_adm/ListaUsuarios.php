<!DOCTYPE html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <title> Lista de Usuários </title>
  </head>

  <body>

      <?php
        include_once("header_adm.php");
      ?>

      <main>

          <div class="row text-center container-fluid pb-3">
            <div class="col-md-12">
              <h1 class="text-success mt-2"><b>Lista de Usuários</b></h1>
            </div>
          </div>

           <div>
              <table class="table-bordered table-striped w-100">  
                <thead class="text-center">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nível de Acesso</th>
                    <th scope="col">Data Cadastro/Atualização</th>
                    <th scope="col" class="">Ações <br> <a class="btn btn-warning btn-sm mb-1" href="CadastrarUsuario.php">&nbsp; CADASTRAR &nbsp;&nbsp;</a></th>
                  </tr>
                </thead>
                <tbody class="text-center" >
                  <tr>
                    <th scope="row">1</th>
                    <td>Marcela Antonelli</td>
                    <td>ma@gmail.com</td>
                    <td>usuário</td>
                    <td>01/01/2019 08:35</td>
                    <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarUsuario.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob Souza</td>
                    <td>js@uol.com.br</td>
                    <td>Administrador</td>
                    <td>15/02/2019 10:30</td>
                    <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarUsuario.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Laurinda Ferraz</td>
                    <td>lau@yahoo.com</td>
                    <td>usuário</td>
                    <td>15/03/2019 13:47</td>
                    <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarUsuario.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Anita Garibalde</td>
                    <td>mana@gmail.com</td>
                    <td>usuário</td>
                    <td>02/10/2019 11:35</td>
                    <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarUsuario.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Ursula Fish</td>
                    <td>js@uol.com.br</td>
                    <td>Usuário</td>
                    <td>10/04/2019 10:30</td>
                    <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarUsuario.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Pericles Thort</td>
                    <td>per@yahoo.com</td>
                    <td>usuário</td>
                    <td>16/03/2019 13:47</td>
                    <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarUsuario.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Natasha Vampy</td>
                    <td>nat@gmail.com</td>
                    <td>usuário</td>
                    <td>06/01/2019 08:35</td>
                    <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarUsuario.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Dilma Iron</td>
                    <td>di@uol.com.br</td>
                    <td>usuário</td>
                    <td>15/02/2019 10:30</td>
                    <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarUsuario.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Nero Fire</td>
                    <td>fogo@yahoo.com</td>
                    <td>usuário</td>
                    <td>16/03/2019 13:47</td>
                    <td class="w-25"><a class="btn btn-secondary btn-sm mb-1 mt-1" href="EditarUsuario.php">&nbsp; Editar&nbsp;&nbsp;</a> <a class="btn btn-danger btn-sm" href="#">Apagar</a></td>
                  </tr>
                </tbody>
              </table>
         </div>

      </main>

  </body>

</html>

