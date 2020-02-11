@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers | Login
@endsection

@section('conteudo')

<main>

    @if(isset($message))
    <script>
        alert('Cadastro realizado com Sucesso!');
    </script>
    @endif

    <div>

        <!-- Verificando se o cadastro foi realizado com sucesso -->
        @if(session("success"))

            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                <strong>{{session("success")}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif

        <!-- Exibindo mensagem para o usuário que estiver inativo,  -->
        @if(session("error"))
        <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
            <strong>{{session("error")}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif       

    </div>

    <!---  inicio do Formulário do Login -->

    <div style="background-image: url(); background-size: cover;" class="py-5 text-center">
        <div class="container">
          <div class="row">
            <div class="mx-auto col-md-6 col-10 bg-white p-5 border border-success">
              <h1 class="mb-4 text-success">Login do Usuário</h1>

              <form action="/login" method="POST">
                
                {{ csrf_field() }}
                <!--gera o token de segurança, verifica se o usuário é autenticado-->

                <div class="form-group"> 
                     <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="digite o seu email" required>
                </div>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="form-group mb-3"> 
                    
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Digite a Senha" required>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
        
                    <small class="form-text text-muted text-right">
                      <a href="\esqueceuSenha" class="text-success"> Esqueceu a sua Senha ?</a>
                    </small>
               
                </div>

                <div class="col-md-12">
                    <br>
                    <button type="submit" class="btn btn-success w-75">Acessar</button><br> <br>   

                    <div class="row">
                        <div class="col-md-12 pt-2"><a href="\cadastrarUsuario" class="text-success"> Não tem cadastro ? Cadastre se aqui.</a></div>
                    </div>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>

</main>
      
  @endsection