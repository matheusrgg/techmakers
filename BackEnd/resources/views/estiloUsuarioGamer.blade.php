@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection


@section('conteudo')

<div class="py-4 text-center text-white h-100 align-items-center d-flex"
          style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(/imagens/bannercomputadorprof.jpg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
          <div class="container">
            <div class="row">
              <div class="mx-auto col-lg-8 col-md-10">
                <h3 class="mb-4 display-5">Vamos te ajudar <br>a encontrar o seu computador Gamer !</h3>
              </div>
            </div>
          </div>
    </div>

    <section id="back" class="banner container">  

                  <!-- INÍCIO - Numeração em sequência das páginas 1 2 3 ...   -->
                  <div class="row justify-content-center">
                      <nav>
                        <div class="nav-wrapper pb-1 pt-3">
                            <div class="col s12 d-inline-flex align-items-center">
                                <a href="/estiloUsuario" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/1p.jpg" width="35" height="35"></a>
                                <a class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/2p.jpg" width="35" height="35"></a>
                                <a class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/3c.jpg" width="35" height="35"></a>
                            </div>
                        </div> 
                      </nav>
                  <!--  FIM  - Numeração em sequência das páginas 1 2 3 ...    -->                         
                  </div> 


                  <!-- INÍCIO - Linha onde aparece a pergunta "Qual a sua preferência ?"  -->
                  <div class="row text-center">
                    <div class="col-md-12">
                      <h2 class="text-success">Qual a sua preferência ?</h2>
                    </div>
                  <!--   FIM  - Linha onde aparece a pergunta "Qual a sua preferência ?"  -->
                  </div>


            <!--- Início dos cards com as fotos dos Computadores  -->
            <div class="d-flex justify-content-center">

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="/estiloUsuario/NotebookGamer"><img class="card-img-top" src="/imagens/nootbokGamerF.jpg" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title text-center">
                          <a href="/estiloUsuario/PCgamer/Gamer_Notebook">Notebooks</a>
                        </h4>
                        <p class="card-text text-center">Então você quer mobilidade.</p>
                      </div>
                      <div class="card-footer">
                        <a href="/estiloUsuario/PCgamer/Gamer_Notebook" class="btn btn-success">Escolher...</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="/estiloUsuario/PcGamer"><img class="card-img-top" src="/imagens/pcGamerf.jpg" alt=""></a>
                      <div class="card-body">
                        <h4 class="text-dark text-center">
                          <a href="/estiloUsuario/PCgamer/Gamer_Desktop">Desktops</a>
                        </h4>
                        <p class="card-text text-center">Então você quer algo mais parrudo.</p>
                      </div>
                      <div class="card-footer">
                        <a href="/estiloUsuario/PCgamer/Gamer_Desktop" class="btn btn-success">Escolher...</a>
                      </div>
                    </div>
                  </div>
            <!--- FIM dos cards com as fotos dos Computadores  -->
            </div>

     </section>

@endsection