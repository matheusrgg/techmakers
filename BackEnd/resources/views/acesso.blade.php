@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection

<!-- @section('bg')
style="background-image: url(imagens/bg-body.jpg)"
@endsection -->

@section('conteudo')


<div>
  <h1>
  </h1>
</div>
<div style="background-image: url(); background-size: cover;" class="py-5 text-center">
  <div class="container">
    <div class="row">
      <div class="mx-auto col-md-6 col-10 bg-white p-5 border border-success">
        <h1 class="mb-4 text-success">Login do Usuário</h1>
        <form>
          <div class="form-group"> <input type="email" class="form-control border-success" placeholder="digite o seu email" id="form9"> </div>
          <div class="form-group mb-3"> <input type="password" class="form-control border-success" id="form10" placeholder="Digite a Senha">
            <small class="form-text text-muted text-right">
              <a href="/esqueceuSenha" class="text-success"> Esqueceu a sua Senha ?</a>
            </small>
          </div>
          <div class="col-md-12">
            <br>
<!--          <button type="submit" class="btn btn-success w-75">Acessar</button><br> <br>   -->
            <a class="btn btn-success w-75" href="#" role="button">Acessar</a>
            <div class="row">
              <div class="col-md-12 pt-2"><a href="/novo_usuario" class="text-success"> Não tem cadastro ? Cadastre se aqui.</a></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




  @endsection