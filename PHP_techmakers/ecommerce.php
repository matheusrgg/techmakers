<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Configuração da aba da página -->
  <link rel="icon" href="imagens/icone_pagina1.jpg">
  <title> Estilo do Usuário </title>
  <!-- dependências CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/wireframe.css">
  <link rel="stylesheet" href="css/testandoResponsivo.css">

</head>



<body>


  <! ----- Comeco do header --->


    <header>

      <nav class="navbar navbar-expand-md navbar-light novembroMenu">

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
              <li class="nav-item"> <a class="nav-link text-success" href="computadores.php">Computadores</a> </li>
              <!--  <li class="nav-item"> <a class="nav-link text-success" href="#">Jogos</a> </li>  -->
              <li class="nav-item"> <a class="nav-link text-success" href="acessorios.php">Acessórios</a> </li>
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
    <! ----- FINAL DO HEADER --->

      <!-- Foto da Matrix de fundo após o menu principal
 <main>
 <div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(imagens/pecas-computador.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
          <div class="container py-4">
            <div class="row">
              <div class="mx-auto col-lg-8 col-md-10">
                <h1 class="mb-4 display-5"br>Escolha as peças do seu computador</h1>
              </div>
            </div>
          </div>
</div>
  <div class="text-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <nav>
          <div class="nav-wrapper"></div>
        </nav>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h1 class="text-success"><b></b></h1>
        </div>
      </div>
    </div>
  </div>
  </main>
  <main> -->


      <div>
        <img src="imagens/novembroMidia.jpg" class="novembroMidia">

      </div>


      <!-------------------- Botoes Responsivosss  ------------>

      <div class="container" id="filtoResponsivo">
        <div class="row">
          <div class=" container">

            <h1></h1>

            <div class="list-group-item row form-group bg-secondary text-white">
              <h3>ORDENADOR </h3>
            </div>

            <div class="list-group-item row form-group p-3 bg-light">
              <label class="mr-sm-4 sr-only" for="inlineFormCustomSelect">Preferência</label>
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Menor Preços</option>
                <option value="1">Menor Preços</option>
                <option value="2">Menor Preços</option>
                <option value="3">Menor Preços</option>
                <option value="2">Menor Preços</option>
                <option value="3">Menor Preços</option>
              </select>
            </div>

          </div>


        </div>


      </div>


      <!-------------------- Capa 01  ------------>
      <div class="container">
        <div class="row bg-light">


          <div class="col-lg-3" id="containerFiltro">
            <h1></h1>
            <div class="list-group-item row form-group bg-secondary text-white divCAIXA">
              <h3>Preco</h3>
            </div>

            <div class="list-group-item row form-group bg-light">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Memòria RAM</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"></label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Segurança</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Costureira(o)</label>
              </div>

            </div>

            <div class="list-group-item row form-group bg-secondary text-white divCAIXA">
              <h3>Hardware</h3>
            </div>

            <div class="list-group-item row form-group bg-light">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Memòria RAM</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"></label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Segurança</label>
              </div>

            </div>
            <div class="list-group-item row form-group bg-secondary text-white divCAIXA">
              <h3>Acessorios</h3>
            </div>

            <div class="list-group-item row form-group bg-light">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Memòria RAM</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"></label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Segurança</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Costureira(o)</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Arrumadeira</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Jardineiro</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Auxiliar de Limpeza</label>
              </div>
            </div>

          </div>




          <!-------------------- COLUNA 2 ------------>




          <div class="d-flex flex-row flex-wrap col-lg-9" ><!----- começo da col ---->

          <div class="col-lg-4 col-md-4 col-4"><!--- começo do card ---->
          <div class="card h-100 mb-3">  
                <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
                  <div class="card-img-overlay">
                    <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto">

                  </div>

                </a>
                <div class="card-body">
                  <h4 class="card-title text-center">
                    <a href="#">Fone Gamer Huck</a>
                  </h4>
                  <h5 class="text-center text-success">R$ 220,00</h5>
                  <p class="card-text">Lorem ipsum amet blandit quis posuere proin neque sapien nibh, maecenas dui leo
                    feugiat aenean nullam fusce orci adipiscing mauris, facilisis ligula semper nunc facilisis maecenas
                    bibendum non. praesent sociosqu dui porta dictumst id consequat et.</p>
                </div>
                <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                  <a href="#" class="btn btn-success">Comprar</a>
                </div>
           </div>     
          </div><!----- final do card ---->


          <div class="col-lg-4 col-md-4 col-4"><!--- começo do card ---->
          <div class="card h-90">  
                <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
                  <div class="card-img-overlay">
                    <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto">

                  </div>

                </a>
                <div class="card-body">
                  <h4 class="card-title text-center">
                    <a href="#">Fone Gamer Huck</a>
                  </h4>
                  <h5 class="text-center text-success">R$ 220,00</h5>
                  <p class="card-text">Lorem ipsum amet blandit quis posuere proin neque sapien nibh, maecenas dui leo
                    feugiat aenean nullam fusce orci adipiscing mauris, facilisis ligula semper nunc facilisis maecenas
                    bibendum non. praesent sociosqu dui porta dictumst id consequat et.</p>
                </div>
                <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                  <a href="#" class="btn btn-success">Comprar</a>
                </div>
           </div>     
          </div><!----- final do card ---->


          <div class="col-lg-4 col-md-4 col-4"><!--- começo do card ---->
          <div class="card h-100">  
                <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
                  <div class="card-img-overlay">
                    <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto">

                  </div>

                </a>
                <div class="card-body">
                  <h4 class="card-title text-center">
                    <a href="#">Fone Gamer Huck</a>
                  </h4>
                  <h5 class="text-center text-success">R$ 220,00</h5>
                  <p class="card-text">Lorem ipsum amet blandit quis posuere proin neque sapien nibh, maecenas dui leo
                    feugiat aenean nullam fusce orci adipiscing mauris, facilisis ligula semper nunc facilisis maecenas
                    bibendum non. praesent sociosqu dui porta dictumst id consequat et.</p>
                </div>
                <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                  <a href="#" class="btn btn-success">Comprar</a>
                </div>
           </div>     
          </div><!----- final do card ---->


          <div class="col-lg-4 col-md-4 col-4"><!--- começo do card ---->
          <div class="card h-90">  
                <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
                  <div class="card-img-overlay">
                    <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto">

                  </div>

                </a>
                <div class="card-body">
                  <h4 class="card-title text-center">
                    <a href="#">Fone Gamer Huck</a>
                  </h4>
                  <h5 class="text-center text-success">R$ 220,00</h5>
                  <p class="card-text">Lorem ipsum amet blandit quis posuere proin neque sapien nibh, maecenas dui leo
                    feugiat aenean nullam fusce orci adipiscing mauris, facilisis ligula semper nunc facilisis maecenas
                    bibendum non. praesent sociosqu dui porta dictumst id consequat et.</p>
                </div>
                <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                  <a href="#" class="btn btn-success">Comprar</a>
                </div>
           </div>     
          </div><!----- final do card ---->


          <div class="col-lg-4 col-md-4 col-4"><!--- começo do card ---->
          <div class="card h-90">  
                <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
                  <div class="card-img-overlay">
                    <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto">

                  </div>

                </a>
                <div class="card-body">
                  <h4 class="card-title text-center">
                    <a href="#">Fone Gamer Huck</a>
                  </h4>
                  <h5 class="text-center text-success">R$ 220,00</h5>
                  <p class="card-text">Lorem ipsum amet blandit quis posuere proin neque sapien nibh, maecenas dui leo
                    feugiat aenean nullam fusce orci adipiscing mauris, facilisis ligula semper nunc facilisis maecenas
                    bibendum non. praesent sociosqu dui porta dictumst id consequat et.</p>
                </div>
                <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                  <a href="#" class="btn btn-success">Comprar</a>
                </div>
           </div>     
          </div><!----- final do card ---->

          


          </div><!----- final da col ---->







         


        </div>


        <h1></h1>




      </div>




      </div>

      

      <?php
    include_once("footer.php");
?>

</body>

</html>