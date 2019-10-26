<?php
    include_once("config/variaveis.php");
?>


<!--- Início do cabeçalho navbar principal padrão, ficará visível nas páginas que usar o include_once("header.php")  --->
<header>

        <nav class="navbar navbar-expand-md navbar-light">

            <div class="container">

                <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbar6">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar6">

                    <!--- Início do Logotipo --->
                    <a class="navbar-brand text-primary d-none d-md-block" href="index.php">
                    <img src="imagens/TechMakers_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
                    <b class="text-success"> TechMakers</b>
                    <!--- Fim do Logotipo --->
                    </a>

                    <!--- Início das opções do Menu Principal --->
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item"> <a class="nav-link text-success" href="index.php">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="#">Computadores</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="#">Jogos</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="#">Acessórios</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="contato.php">Contato</a> </li>
                    <!--- Fim das opções do Menu Principal da Home --->
                    </ul>

                    <!--- Início do Carrinho de Compras na barra do menu Principal --->
                    <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link text-success" href="#">Carrinho</a> </li>
                    <!--- Fim do Carrinho de Compras na barra do menu Principal --->
                    </ul>

                    <!--- Início do Entrar/Cadastrar do usuário na barra do menu Principal --->
                    <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link text-success" href="acesso.php">Entrar</a> </li>
                    <li class="nav-item"> <a class="nav-link text-success" href="novo_usuario.php">Cadastrar</a> </li>
                    <!--- Fim do Entrar/Cadastrar do usuário na barra do menu Principal --->
                    </ul>

                </div>

            </div>

        </nav>

 <!--- Fim do cabeçalho navbar principal padrão --->
</header>

