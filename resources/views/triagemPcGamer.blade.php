@extends('layouts.templatetechmakers')

@section('titulo')
    Escolha Seus jogos preferidos :)
@endsection

@section('conteudo')

    <!-- INÍCIO - Numeração em sequência das páginas 1 2 3 4...   -->
    <div class="row justify-content-center">
        <nav>
          <div class="nav-wrapper pt-3">
              <div class="col s12 d-inline-flex align-items-center">
                  <a href="estilousuario.php" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/1p.jpg" width="35" height="35"></a>
                  <a href="telagames.php" class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/2p.jpg" width="35" height="35"></a>
                  <a class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/3p.jpg" width="35" height="35"></a>
                  <a class="breadcrumb p-0 m-0"><img class="d-block" src="/imagens/4c.jpg" width="35" height="35"></a>
              </div>
          </div> 
        </nav>
    <!--  FIM  - Numeração em sequência das páginas 1 2 3 4...    -->                         
    </div> 


    <h3 class=" text-center text-success" style=" margin-top: 10px">Vai Jogar o Que ??</h3>

    <div class="d-flex justify-content-center row pt-3">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="gamerPC.php"><img class="card-img-top" src="/imagens/Rainbow_SixF.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title text-success">
              <a href="gamerPC.php">Rainbow Six siege</a>
            </h4>
            <p class="card-text">Então quer dizer que você gosta de algo mais refinado </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="gamerPC.php"><img class="card-img-top" src="/imagens/GTA5F.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="text-dark">
              <a href="gamerPC.php">grand theft auto v</a>
            </h4>
            <p class="card-text">Então você quer algo mais parrudo</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="gamerPC.php"><img class="card-img-top" src="/imagens/minecraftF.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="text-dark">
              <a href="gamerPC.php">Minecraft</a>
            </h4>
            <p class="card-text">Então você quer algo mais parrudo</p>
          </div>
        </div>
      </div>
    <div class="d-flex justify-content-center row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="gamerPC.php"><img class="card-img-top" src="/imagens/RocketLeagueF.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="gamerPC.php">Rocket League</a>
            </h4>
            <p class="card-text">Então quer dizer que você gosta de joga em Notbok</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="gamerPC.php"><img class="card-img-top" src="/imagens/Destiny-2F.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="text-dark">
              <a href="gamerPC.php">Destiny 2</a>
            </h4>
            <p class="card-text">Então você quer algo mais parrudo</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="gamerPC.php"><img class="card-img-top" src="/imagens/CSGOF.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="text-dark">
              <a href="gamerPC.php">counter-strike</a>
            </h4>
            <p class="card-text">Então você quer algo mais parrudo</p>
          </div>
        </div>
      </div>

@endsection