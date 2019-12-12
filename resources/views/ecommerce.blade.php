@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection

@section('bg')
style="background-image: url(imagens/bg-body.jpg)"
@endsection

@section('conteudo')


<style>
  #desconto {
    position: absolute;
    top: 1px;
    right: 0px;
    width: 85px;
  }

  @font-face {
    font-family: helvetica-black-condensed-oblique;
    src: url(Fonts/helvetica-black-condensed-oblique.otf);
  }

  #apresentacao {
    font-family: helvetica-black-condensed-oblique;
  }
</style>
<! ----- FINAL DO HEADER --->

  <!-- Foto da Matrix de fundo após o menu principal --->



  <div class="container" style="padding: 0px;">
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


      <div class="col-lg-2" id="containerFiltro">
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




      <div class="d-flex flex-wrap col-lg-10"><!----- começo da col ---->
        

        <div class="col-lg-4 col-md-5 col-12"><!--- começo do card ---->
          

          <div class="card h-90" style="width: 18rem; ">
            <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
              <div class="card-img-overlay">
                <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto">

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
              <a href="#" class="btn btn-secondary"><span class="iconify" data-icon="ant-design:plus-outline"
                  data-inline="false"></span>Detalhes</a>
              <a href="#" class="btn btn-success" style="margin-bottom: 10px;"><span class="iconify"
                  data-icon="emojione-monotone:shopping-cart" data-inline="false"></span>Comprar</a>
            </div>
          </div>
        </div><!----- final do card ---->
        

        <div class="col-lg-4 col-md-5 col-12"><!--- começo do card ---->
          

          <div class="card h-90" style="width: 18rem; ">
            <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
              <div class="card-img-overlay">
                <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto">

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
              <a href="#" class="btn btn-secondary"><span class="iconify" data-icon="ant-design:plus-outline"
                  data-inline="false"></span>Detalhes</a>
              <a href="#" class="btn btn-success" style="margin-bottom: 10px;"><span class="iconify"
                  data-icon="emojione-monotone:shopping-cart" data-inline="false"></span>Comprar</a>
            </div>
          </div>
        </div><!----- final do card ---->

        <div class="col-lg-4 col-md-5 col-12"><!--- começo do card ---->
          

          <div class="card h-90" style="width: 18rem; ">
            <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
              <div class="card-img-overlay">
                <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto">

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
              <a href="#" class="btn btn-secondary"><span class="iconify" data-icon="ant-design:plus-outline"
                  data-inline="false"></span>Detalhes</a>
              <a href="#" class="btn btn-success" style="margin-bottom: 10px;"><span class="iconify"
                  data-icon="emojione-monotone:shopping-cart" data-inline="false"></span>Comprar</a>
            </div>
          </div>
        </div><!----- final do card ---->
        <div class="col-lg-4 col-md-5 col-12"><!--- começo do card ---->
          

          <div class="card h-90" style="width: 18rem; ">
            <a href="#"><img class="card-img-top" src="imagens/foneGamer.png" alt="Imagem do computador desktop">
              <div class="card-img-overlay">
                <img src="imagens/promo.png" class="card-img-top w-3" alt="desconto" id="desconto">

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
              <a href="#" class="btn btn-secondary"><span class="iconify" data-icon="ant-design:plus-outline"
                  data-inline="false"></span>Detalhes</a>
              <a href="#" class="btn btn-success" style="margin-bottom: 10px;"><span class="iconify"
                  data-icon="emojione-monotone:shopping-cart" data-inline="false"></span>Comprar</a>
            </div>
          </div>
        </div><!----- final do card ---->






        </div> <!----- final da col ---->
       










      </div>


      <h1></h1>




    </div>




  </div>


  @endsection