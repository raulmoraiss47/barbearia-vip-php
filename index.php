<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Barbearia Vip</title>
</head>

<style>
.banner-image {
   background-image: url('img/cliente.jpg');
   background-size: cover;
}
</style>
  <body>

    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logoDourada.png" alt="" width="100" height="40" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-warning" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="#servicos">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="#servicos">Franqueado</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="login.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="controle/clientes.php">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="contato.php">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Banner Image  -->

    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center" >
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br>
        <h1 style="color: #F1D00A; ;">BARBEARIA VIP</h1>        
        <br>
        <a href=""><button class="btn btn-warning" style="width: 155px; height: 45px;">Agendamento</button></a>
       
      </div>
    </div> 
<hr>


<div class="text-center" id="servicos">
<br><br><br><br>
<h2 class="text-center" style="color: black; font-family: sans-serif; ">NOSSOS SERVIÇOS</h2><br>

  <div class="row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
    <div class="col" style="150px">
      <div class="card text-center" style="border:none;">
        <img src="img/cabelo.png" class="card-img-top m-auto" alt="..." style="width: 180px;">
        <div class="card-body">
          <h5 class="card-title">Corte de Cabelo</h5>        
        </div>
      </div>
    </div>
    <div class="col" style="150px">
      <div class="card text-center" style="border: none;">
        <img src="img/quimica.png" class="card-img-top m-auto" alt="..." style="width: 180px;">
        <div class="card-body">
          <h5 class="card-title">Quimica</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center" style="border: none;">
      <img src="img/massagem.png" class="card-img-top m-auto" alt="..." style="width: 180px;">
        <div class="card-body">
          <h5 class="card-title">Massagem</h5>         
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center" style="border: none;">
        <img src="img/manicure.png" class="card-img-top m-auto" alt="..." style="width: 180px;">
        <div class="card-body">
          <h5 class="card-title">Manicure</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center" style="border: none;">
      <img src="img/bar.png" class="card-img-top m-auto" alt="..." style="width: 180px;">
        <div class="card-body">
          <h5 class="card-title">Bar</h5>               
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center" style="border: none;">
        <img src="img/poker.png" class="card-img-top m-auto" alt="..." style="width: 180px;">
        <div class="card-body">
          <h5 class="card-title">Poker</h5>    
            </div>
      </div>
    </div>
  </div> 
  </div>


</div>

<div class="col-12 m-auto" style="background-color: #F1D00A;">
  <br><br><br>
<h2 class="col-4 m-auto text-center">Quer saber como montar uma barbearia de sucesso?</h2>
<br>
<p class=" col-10 m-auto text-center">
O mercado ligado à beleza masculina tem crescido exponencialmente e se tornado um ótimo investimento, que traz um retorno estável e de baixo risco. Acompanhando esse crescimento, a Confraria da Barba passou a atender pelo sistema de franchising, abriu filiais em vários estados do Brasil e hoje já é uma das maiores franquias de barbearias do Brasil. Então, se você quer saber como montar uma barbearia de sucesso, leve a Confraria da Barba para sua cidade.
</p>
<br><br><br>
<div class="mb-3 col-2 m-auto">
        <input type="submit" value="Quero ser Franqueado" name="SendCadMsg" class="btn btn-dark" style="width: 100%; height: 55px;">
      </div> 
<br><br><br>
</div>


<div class="col-12 m-auto">
<br><br>
<h2 class="text-center">Lazer</h2>
<br><br><br>

<div class="row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
    <div class="col" style="150px">
      <div class="card text-center" style="border:none;">
        <img src="img/cervejas.png" class="card-img-top m-auto" alt="..." style="width: 180px;">
        <div class="card-body">
          <h5 class="card-title">Cervejas</h5>
          <p>Enquanto espera para fazer a barba ou cabelo, experimente as multipremiadas cervejas especiais Eisenbahn, o chopp* Baden Baden gelado, os energéticos da RedBull, bebidas destiladas ou nosso delicioso cafezinho.</p>        
        </div>
      </div>
    </div>
    <div class="col" style="150px">
      <div class="card text-center" style="border: none;">
        <img src="img/pooker.png" class="card-img-top m-auto" alt="..." style="width: 180px;">
        <div class="card-body">
          <h5 class="card-title">Poker</h5>
          <p>Os confrades que curtem o jogo de cartas mais popular do mundo têm lugar reservado à mesa. O poker acontece quinzenalmente ou de acordo com a reserva da mesa.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card text-center" style="border: none;">
      <img src="img/jogos.png" class="card-img-top m-auto" alt="..." style="width: 180px;">
        <div class="card-body">
          <h5 class="card-title">Jogos</h5>        
          <p>A confraria é o lugar ideal para ir sozinho, com os amigos ou com o filhão. O ambiente conta com sala de games, fliperama, pebolim, pinball, mesa de pôquer, sinuca e muito mais.*</p> 
        </div>
      </div>
    </div>
    </div>
<br><br><br><br><br><br>





<footer class="col-12 m-auto bg-dark" style="heigth: 2em;"><br>  
  <p class="text-center" style="color: #f1c43d;">Esse site foi desenvolvido por Raul Moraes.</p>



  oi
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>