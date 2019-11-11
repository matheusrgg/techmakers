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
</head>

<body>

    <?php
      include_once("header.php");
    ?>

 <!-- Foto da Matrix de fundo após o menu principal -->
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
  <main>


     <!-------------------- COLUNA 1 ------------>
    <div class="container">
    <div class="row bg-light">
            <div class="col">
            <h1>1 de 3</h1>
            <div class="list-group-item row form-group bg-secondary text-white">
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

                <div class="list-group-item row form-group bg-secondary text-white">
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
                <div class="list-group-item row form-group bg-secondary text-white">
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




            <div class="col">
            <h1>2 de 3</h1>
                   <div class="col">
                   <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop"></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="#">Fone Gamer Huck</a>
                        </h4>
                        <h5 class="text-center text-success">R$ 220,00</h5>
                        <p class="card-text">Lorem ipsum amet blandit quis posuere proin neque sapien nibh, maecenas dui leo feugiat aenean nullam fusce orci adipiscing mauris, facilisis ligula semper nunc facilisis maecenas bibendum non. praesent sociosqu dui porta dictumst id consequat et.</p>
                      </div>
                      <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                        <a href="#" class="btn btn-success">Comprar</a>
                      </div>
                  </div>
                </div>    
             </div>



            <!-------------------- COLUNA 3 ------------>

            <div class="col">
            <h1>3 de 3</h1>
            
            
                   <div class="col">
                   <div class="card h-100">
                   <a href="#"><img class="card-img-top" src="imagens/pcGamer.jpg" alt="Imagem do computador desktop"></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="#">Fone Gamer Huck</a>
                        </h4>
                        <h5 class="text-center text-success">R$ 220,00</h5>
                        <p class="card-text">Lorem ipsum amet blandit quis posuere proin neque sapien nibh, maecenas dui leo feugiat aenean nullam fusce orci adipiscing mauris, facilisis ligula semper nunc facilisis maecenas bibendum non. praesent sociosqu dui porta dictumst id consequat et.</p>
                      </div>
                      <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                        <a href="#" class="btn btn-success">Comprar</a>
                      </div>
                  </div>
                </div>    
             </div>
            
            </div>
            </div>
            
    
    
    
    </div>

   </main> 

  <?php
    include_once("footer.php");
?>

</body>

</html>   