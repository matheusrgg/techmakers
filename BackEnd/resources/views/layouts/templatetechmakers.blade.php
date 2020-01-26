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
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                    <img src="/imagens/TechMakers_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
                    <b class="text-success"> TechMakers</b>
                    <!--- Fim do Logotipo -->
                    </a>

                    <!--- Início das opções do Menu Principal -->
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item"> <a class="nav-link text-success" href="/home">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="/computadores">Computadores</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="/acessorios">Acessórios</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="/contato">Contato</a> </li>
                    <!--- Fim das opções do Menu Principal da Home -->
                    </ul>

                    <!--- Início do Carrinho de Compras na barra do menu Principal -->
                    <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link text-success" href="#">Carrinho</a> </li>
                    <!--- Fim do Carrinho de Compras na barra do menu Principal -->
                    </ul>

                    <!--- Início do Entrar/Cadastrar do usuário na barra do menu Principal -->
                    <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link text-success" href="/acesso">Entrar</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="/novo_usuario">Cadastrar</a> </li>
                    <!--- Fim do Entrar/Cadastrar do usuário na barra do menu Principal -->
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
                                <li>Contato</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Produtos</h4>
                            <ul>
                                <li>Acessórios</li>
                                <li>Notebook</li>
                                <li>Desktop</li>
                                <li>All-in-on</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Perfil</h4>
                            <ul>
                                <li>Profissional</li>
                                <li>Gamer</li>
                                <li>Pessoal</li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">TechMakers</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>


		</div>
    </footer>

<!--- Fim do rodapé padrão  -->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>