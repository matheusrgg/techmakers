
@extends('layouts.templatetePainelAdmchmakers')

@section('titulo')
TechMakers
@endsection

@section('conteudo')
   
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1></h1>
                <br>
            </div>
        </div>

        @if(isset($usuario))

            <form action="/ListaUsuarios/formUpdateUsuario" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="text" name="idUsuario" value="{{$usuario->id}}" hidden>

                <div class="form-group">
                    <label for="nomeUsuario">Nome do Usuário</label>
                    <input class="form-control" type="text" name="nomeUsuario" id="" value="{{$usuario->name}}">
                </div>
                <div class="form-group">
                    <<label for="emailUsuario">Email</label>
                    <input class="form-control" type="text" name="emailUsuario" id="" value="{{$usuario->email}}">
                </div>
                <div class="form-group">
                    <label for="perfilUsuario">Perfil</label>
                    <input class="form-control" type="text" name="perfilUsuario" id="" value="{{$usuario->perfil}}">
                </div>
                <div class="form-group">
                    <label for="statusUsuario">Status: 0 - Inativo / 1 - Ativo</label>
                    <input class="form-control" type="number" name="statusUsuario" id="statusUsuario" value="{{$usuario->status}}">
                </div>
                                
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Cadastrar Usuário</button>
                </div>
                
            </form>

        @elseif(isset($result))

        @else
            <h1>Este usuário não existe na base de dados!</h1>
        @endif

        <div class="row text-center">
            <div class="col-md-12">
                @if(isset($result))
                    @if($result)
                        <h2>Cadastro realizada com sucesso! </h2>
                    @else
                        <h1>Não deu certo o seu cadastro! </h1>
                    @endif
                @endif
            </div>
        </div>
    
    </section>
@endsection