
<!--- Início do cabeçalho navbar do Painel Administrativo, ficará visível nas páginas que usar o include_once("header_adm.php")  --->
<header>

        <nav class="navbar navbar-expand-md navbar-light">

            <div class="container">

                <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbar6">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar6">

                    <!--- Início do Logotipo --->
                    <a class="navbar-brand text-primary d-none d-md-block" href="PainelAdm.php">
                        <img src="../imagens/TechMakers_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
                        <b class="text-success"> TechMakers</b>
                    <!--- Fim do Logotipo --->
                    </a>

                    <!--- Início do título Painel Admnistrativo --->
                    <ul class="navbar-nav mx-auto">
                        <li> <a class="text-success"><h3>Painel Administrativo<h3></a> </li>
                    <!--- Fim do título Painel Admnistrativo    --->
                    </ul>

                    <!--- Início das opções do Painel Admnistrativo --->
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link text-success" href="ListaUsuarios.php">Usuários</a> </li>
                        <li class="nav-item"> <a class="nav-link text-success" href="ListaProdutos.php">Produtos</a> </li>
                    <!--- Fim das opções do Painel Admnistrativo    --->
                    </ul>

                    <!--- Início do botão SAIR na barra do menu do Painel Administrativo --->
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="btn btn-success" href="../index.php" role="button">Sair</a> </li>
                    <!--- Fim do botão SAIR na barra do menu do Painel Administrativo --->
                    </ul>

                </div>

            </div>

        </nav>

 <!--- Fim do cabeçalho navbar do Painel Administrativo --->
</header>

