<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Rockwell" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css">
   
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/testandoResponsivo.css">
    <link rel="stylesheet" href="/css/wireframe.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('titulo')</title>
</head>

<!-- <body @yield('bg') > -->
<body style="background-color:white" >

<!--- Início do cabeçalho navbar principal padrão, ficará visível nas páginas que usar o include_once("header.php")  -->
<header>
           <nav class="navbar navbar-expand-md navbar-light">

            <div class="container">

                <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar6">

                    <!--- Início do Logotipo -->
                    <a class="navbar-brand text-primary d-none d-md-block" href="/home">
                    <img src="/imagens/logoTech.png" width="150PX" height="100PX" class="d-inline-block align-top" alt="">
                    <!-- <b class="text-success"> TechMakers</b> -->
                    <!--- Fim do Logotipo -->
                    </a>

                    <!--- Início das opções do Menu Principal -->
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item"> <a class="nav-link text-success" href="/home">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="/home#ofertas">Ofertas</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="/computadores">Computadores</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="/acessorios">Acessórios</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="/contato">Contato</a> </li>
                    <!--- Fim das opções do Menu Principal da Home -->
                    </ul>

                    <!--- Início do Carrinho de Compras na barra do menu Principal -->
                    <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link text-success" href="/carrinho">Carrinho</a> </li>
                    <!--- Fim do Carrinho de Compras na barra do menu Principal -->
                    </ul>


                    
                    <!--- Início do Logar/Cadastrar do usuário na barra do menu Principal -->
                    <ul class="navbar-nav">
                            @guest    
                                <li class="nav-item"> <a class="nav-link text-success" href="/login">Login</a> </li>
                                <li class="nav-item"> <a class="nav-link text-success" href="/cadastrarUsuario">Cadastrar</a> </li>
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
       
                </div>

            </div>

        </nav>

 <!--- Fim do cabeçalho navbar principal padrão -->
</header>

<main class="container-fluid">
<!-- conteúdo do site -->
    @yield('conteudo')
</main>

<!-- Início do rodapé padrão, ficará visível nas páginas que usar o include_once("footer.php")  -->

<footer class="footer-section spad">
        <div class="container">
            
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Sobre nós</h4>
                            <ul>
                                <li>Sobre</li>
                                <li> <a href="/contato">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Produtos</h4>
                            <ul>
                                <!-- <li>Acessórios</li>  -->
                                <li> <a href="/home#ofertas">Ofertas</a> </li>
                                <li> <a href="/computadores">Computadores</a> </li>
                                <li> <a href="/acessorios">Acessórios</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Perfil</h4>
                            <ul>
                                <li> <a href="/estiloUsuario/PCgamer">Gamer</a> </li>
                                <li> <a href="/estiloUsuario/UsoPessoal">Uso Pessoal</a> </li>
                                <li> <a href="/estiloUsuario/UsoProfissional">Uso Profissional</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Informações</h4>
                            <ul>
                                <li>Formas de pagamento</li>
                                <li>Prazos</li>
                                <li>Devolução</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>
			</div>

<div class="container text-center pt-5">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="/home">TechMakers</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>


		</div>
    </footer>

<!--- Fim do rodapé padrão  -->


<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>