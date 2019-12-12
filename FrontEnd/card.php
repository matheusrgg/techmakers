<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<style>
#desconto{
    position:absolute;
    top:1px;
    right:0px;
    width:85px;
}
    @font-face{
    font-family: helvetica-black-condensed-oblique;
    src: url(Fonts/helvetica-black-condensed-oblique.otf);
}

    #apresentacao{
        font-family:helvetica-black-condensed-oblique;
    }


</style>
    
<div class="col-lg-4 col-md-4 col-4"><!--- começo do card ---->
          <div class="card h-90" style="width: 18rem; ">  
                <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
                  <div class="card-img-overlay">
                    <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto" >

                  </div>

                </a>
                <div class="card-body">
                  <h4 class="card-title text-center">
                    <a href="#" class="text-secondary" id="apresentacao">Fone Gamer Huck</a>
                  </h4>

                  <h5 class="text-center text-primary">4x R$44,00</h5>
                  <h5 class="text-center text-success">R$ 220,00</h5>
                  
                </div>
                <div class="card-footer d-inline-flex flex-column-reverse align-items-center">
                    <a href="#" class="btn btn-secondary"><span class="iconify" data-icon="ant-design:plus-outline" data-inline="false"></span>Detalhes</a>
                  <a href="#" class="btn btn-success" style="margin-bottom: 10px;"><span class="iconify" data-icon="emojione-monotone:shopping-cart" data-inline="false"></span>Comprar</a>
                </div>
           </div>     
          </div><!----- final do card ---->


</body>
</html>