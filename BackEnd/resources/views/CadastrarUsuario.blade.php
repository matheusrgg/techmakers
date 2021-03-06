@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection

@section('conteudo')

<main>

    <div class="text-center">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <nav>
            <div class="nav-wrapper"></div>
          </nav>
        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <h1 class="text-success mt-4"><b>Cadastro de Usuário</b></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5 mb-5 mr-2 ml-2 text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12 p-4 border rounded border-success">
            

            <!--aqui começa o formulário -->        
            
            <form action="/cadastrarUsuario" method="POST" enctype="multipart/form-data">
                  @csrf
                  @if(session("created"))
                      <div class="alert alert-light alert-dismissible fade show" role="alert">
                          <strong>{{session("created")}}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @endif

                  @if(session("error"))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>{{session("error")}}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @endif

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group col-md-12"> <input name="name" value="{{ old("name", '') }}" type="text" class="form-control border-success rounded" id="nomeUsuario" placeholder="Nome"> </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-md-12"> <input name="email" value="{{ old("email", '') }}" type="email" class="form-control border-success rounded" id="emailUsuario" placeholder="seunome@email.com"> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group col-md-12"> <input name="senhaUsuario" value="{{ old("senhaUsuario", '') }}" type="password" class="form-control border-success rounded mt-3" id="senhaUsuario" placeholder="Digite uma senha, mínimo 6 caracteres"> </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-md-12"> <input name="senhaConfirmUsuario" value="{{ old("senhaConfirmUsuario", '') }}" type="password" class="form-control border-success rounded mt-3" id="senhaConfirmUsuario" placeholder="Confirme a senha"> </div>
                </div>
                                       
              </div>

              <!-- <button type="submit" class="btn btn-success btn-lg w-25 mr-5">Enviar</button>            
                  <button type="submit" class="btn btn-success btn-lg w-25 ml-5">Cancelar</button>   -->

              <div class="row">
                  <button type="submit" class="btn btn-success col-lg-4 col-md-4 col-sm-1 mt-2 m-auto">Enviar</button>
                  <div class="espaco my-4"></div>
                  <a class="btn btn-success col-lg-4 col-md-4 col-sm-1 mt-2 m-auto" href="\home" role="button">Cancelar</a>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>


</main>

@endsection