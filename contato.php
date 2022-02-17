<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contato</title>
  </head>
  
  <body style="background-color: #f4f4f4;">
 <!-- Navbar  -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logoDourada.png" alt="" width="90" height="37" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-black" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="login.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="controle/clientes.php">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="contato.php">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <br><br>

      <div class="col-11 m-auto">
        <br><br>
      <h2 class="text-center">Faça Seu Contato</h2><br><br>
      <form action="" method="post">          
        <div class="col-md-4 py-3 m-auto">
            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
            <input name="nome_usuario" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Seu Nome">
          </div>
          <div class="col-md-4 py-3 m-auto">
        <label for="exampleFormControlInput1" class="form-label">Email:</label>
        <input name="email_usuario" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Seu Email">
      </div>
      <div class="col-md-4 py-3 m-auto">
        <label for="exampleFormControlInput1" class="form-label">Assunto:</label>
        <input name="assunto" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Assunto">
      </div>
      <div class="col-md-4 py-3 m-auto">
        <label for="exampleFormControlTextarea1" class="form-label">Digite sua mensagem:</label>
        <textarea name="mensagem" type="text" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea><br>

        <div class="mb-3 col-12 m-auto">
        <input type="submit" value="Enviar" name="SendCadMsg" class="btn btn-warning" style="width: 100%">
      </div>   
      </div><br>   
      </form>
    </div><br><br><br><br><br><br>  

    <footer class="col-12 m-auto bg-dark" style="heigth: 2em;">
      
      <br>
      <p class="text-center" style="color: #f1c43d;">Esse site foi desenvolvido por Raul Moraes.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
  </body>
</html>