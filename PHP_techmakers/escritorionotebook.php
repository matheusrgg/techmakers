<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Configuração da aba da página -->
  <link rel="icon" href="imagens/icone_pagina1.jpg">
  <title> Uso Profissional - Notebook </title>
  <!-- dependências CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/wireframe.css">
</head>

<body>

<?php
  include_once("header.php");
?>

 <main>   

  <!-- Foto da Matrix de fundo após o menu principal -->
  <div class="text-center mx-3 mb-3" style="background-image: url('imagens/matrix1.jpg');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="mx-auto">
          <h1 class="display-5 text-light">Vamos te ajudar <br>a encontrar o seu notebook ideal</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <nav>
          <div class="nav-wrapper">
            <div class="col s12 d-inline-flex align-items-center">
              <a href="estilousuario.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/1p.jpg" width="35" height="35"></a>
              <a href="motivoprofissional.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/2p.jpg" width="35" height="35"></a>
              <a href="preferenciaprofissional.php" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/3p.jpg" width="35" height="35"></a>
              <a href="#!" class="breadcrumb p-0 m-0"><img class="d-block" src="imagens/4p.jpg" width="35" height="35"></a>
            </div>
          </div>
        </nav>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h1 class="text-success"><b>Notebooks para uso profissional</b></h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Início dos notebooks para ESCRITÓRIOS -->

  <div class="container">

      <div class="row">
  
          <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="imagens/01_Escritorionotebook.jpg" alt="Imagem do computador desktop"></a>
                <div class="card-body">
                  <h4 class="card-title text-center">
                    <a href="#">Notebook Positivo Celeron 4GB</a>
                  </h4>
                  <h5 class="text-center text-success">R$ 750,00</h5>
                  <p class="card-text">Inclui aplicativos para escritório (Editor de texto, planilha eletrônica, gerenciador de apresentações, editor de imagens e editor HTML) e Antivírus Grátis por 30 dias. Não possui câmera de vídeo.</p>
                </div>
                <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                  <a href="#" class="btn btn-success">Comprar</a>
                </div>
             </div>
          </div>
  
          <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="imagens/03_Escritorionotebook.jpg" alt="Imagem do computador desktop"></a>
                <div class="card-body">
                  <h4 class="card-title text-center">
                    <a href="#">Notebook Acer Intel 1TB</a>
                  </h4>
                  <h5 class="text-center text-success">R$ 2.150,00</h5>
                  <p class="card-text">Possui câmera de vídeo, dois alto falantes digitais estéreo e microfone integrado.</p>
                </div>
                <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                  <a href="#" class="btn btn-success">Comprar</a>
                </div>
             </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="imagens/02_Escritorionotebook.jpg" alt="Imagem do computador desktop"></a>
                <div class="card-body">
                  <h4 class="card-title text-center">
                    <a href="#">Notebook Vaio Super Intel 9TB</a>
                  </h4>
                  <h5 class="text-center text-success">R$ 3.999,00</h5>
                  <p class="card-text">Notebook de última geração, prático e veloz, com excelente capacidade de armazenamento de memória RAM de 40 GB, além de um design inovador e exclusivo, você estará sempre conectado com estilo.</p>
                </div>
                <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                  <a href="#" class="btn btn-success">Comprar</a>
                </div>
             </div>
          </div>        
            
          
      </div>
     <!--- Fim dos notebooks para ESCRITÓRIOS  --->
     </div>

     </main>

<?php
  include_once("footer.php");
?>
</body>

</html>