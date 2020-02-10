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
                    <a class="navbar-brand text-primary d-none d-md-block" href="/PainelAdm">
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

                        <ul class="dropdown">
                            @guest  
                                <li>
                                    <a href='/home'></a>
                                </li>  
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        {{ Auth::user()->name }} 
                                        <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href='/logout'
                                                onclick="event.preventDefault();
                                                        document.getElementById('/logout').submit();">
                                                Logout
                                            </a>

                                            <form id="/logout" action="/logout" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>                      
                            @endguest
                    </ul>


                        {{-- <ul class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::User()->name }} 
                                <span class="caret"></span>
                            </a>
    
                            <ul class="dropdown-menu">
                                <li>
                                    <a href='/logout'
                                        onclick="event.preventDefault();
                                                document.getElementById('/logout').submit();">
                                        Logout
                                    </a>
    
                                    <form id="/logout" action="/logout" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </ul> --}}


                        <li class="nav-item"> <a class="nav-link text-success" href="/ListaUsuarios">Usuários</a> </li>
                        <li class="nav-item"> <a class="nav-link text-success" href="/ListaProdutos">Produtos</a> </li>
                    <!--- Fim das opções do Painel Admnistrativo    -->
                    </ul>

                    <!--- Início do botão SAIR na barra do menu do Painel Administrativo, 
                          quando clicar no botão, faz o logout do usuário e volta para página Home do sistema TechMakers -->
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">

                            <a class="btn btn-success" href="../home"  onclick="event.preventDefault();
                               document.getElementById('/logout').submit();" role="button">
                               Sair
                            </a>

                        </li>
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

      <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>