<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap-4.3.1.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/testandoResponsivo.css">
    <link rel="stylesheet" href="/css/wireframe.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('titulo')</title>
</head>
<body @yield('bg') >

<!--- Início do cabeçalho navbar principal padrão, ficará visível nas páginas que usar o include_once("header.php")  -->
<header>

        <nav class="navbar navbar-expand-md navbar-light">

            <div class="container">

                <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar6">

                    <!--- Início do Logotipo -->
                    <a class="navbar-brand text-primary d-none d-md-block" href="index.php">
                    <img src="imagens/TechMakers_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
                    <b class="text-success"> TechMakers</b>
                    <!--- Fim do Logotipo -->
                    </a>

                    <!--- Início das opções do Menu Principal -->
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item"> <a class="nav-link text-success" href="index.php">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="computadores.php">Computadores</a> </li>
              <!--  <li class="nav-item"> <a class="nav-link text-success" href="#">Jogos</a> </li>  -->
                    <li class="nav-item"> <a class="nav-link text-success" href="acessorios.php">Acessórios</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="contato.php">Contato</a> </li>
                    <!--- Fim das opções do Menu Principal da Home -->
                    </ul>

                    <!--- Início do Carrinho de Compras na barra do menu Principal -->
                    <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link text-success" href="#">Carrinho</a> </li>
                    <!--- Fim do Carrinho de Compras na barra do menu Principal -->
                    </ul>

                    <!--- Início do Entrar/Cadastrar do usuário na barra do menu Principal -->
                    <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link text-success" href="acesso.php">Entrar</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="novo_usuario.php">Cadastrar</a> </li>
                    <!--- Fim do Entrar/Cadastrar do usuário na barra do menu Principal -->
                    </ul>

                </div>

            </div>

        </nav>

 <!--- Fim do cabeçalho navbar principal padrão -->
</header>

<main class="container">
<!-- conteúdo do site -->
    @yield('conteudo')
</main>

<!-- Início do rodapé padrão, ficará visível nas páginas que usar o include_once("footer.php")  -->
<footer class="py-3 bg-dark">

     <div class="container">
        <a href="#"><p class="m-0 text-center text-white">Time TechMakers&copy; 2019</p></a>
     </div>

    <!-- Estes scripts são necessários para executar algumas funcionalidades do bootstrep -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
              
</footer>
<!--- Fim do rodapé padrão  -->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>