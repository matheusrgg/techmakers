<!DOCTYPE html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap-4.3.1.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/testandoResponsivo.css">
    <link rel="stylesheet" href="/css/wireframe.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title> @yield('titulo') </title>
  </head>

  <body>


<!--- Início do cabeçalho navbar do Painel Administrativo. -->
<header>

        <nav class="navbar navbar-expand-md navbar-light">

            <div class="container">

                <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbar6">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar6">

                    <!--- Início do Logotipo -->
                    <a class="navbar-brand text-primary d-none d-md-block" href="PainelAdm.php">
                        <img src="../imagens/TechMakers_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
                        <b class="text-success"> TechMakers</b>
                    <!--- Fim do Logotipo -->
                    </a>

                    <!--- Início do título Painel Admnistrativo -->
                    <ul class="navbar-nav mx-auto">
                        <li> <a class="text-success"><h3>Painel Administrativo<h3></a> </li>
                    <!--- Fim do título Painel Admnistrativo    -->
                    </ul>

                    <!--- Início das opções do Painel Admnistrativo -->
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link text-success" href="ListaUsuarios.php">Usuários</a> </li>
                        <li class="nav-item"> <a class="nav-link text-success" href="ListaProdutos.php">Produtos</a> </li>
                    <!--- Fim das opções do Painel Admnistrativo    -->
                    </ul>

                    <!--- Início do botão SAIR na barra do menu do Painel Administrativo -->
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="btn btn-success" href="../index.php" role="button">Sair</a> </li>
                    <!--- Fim do botão SAIR na barra do menu do Painel Administrativo -->
                    </ul>

                </div>

            </div>

        </nav>

 <!--- Fim do cabeçalho navbar do Painel Administrativo -->
</header>



      <main>

        @yield('conteudo')

      </main>

  </body>

</html>