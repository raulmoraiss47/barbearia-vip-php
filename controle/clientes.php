<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../img/logoDourada.png" alt="" width="90" height="37" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-black" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="../login.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="controle/clientes.php">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="../contato.php">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <br><br>

    <div class="container py-5" id="login">
        <div class="row bg-light">
            <div class="col-md-12 py-3">
                <h2>Cadastro de Clientes</h2>
            </div>
                <div class="col-md-4 py-3">
                    <img src="../img/cadeado.png" alt="" width="250px">
                  
                </div>
                <div class="col-md-8 py-3">
                    <form action="../controle/salvarCliente.php" method="POST">


                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu Nome" style="width: 50%" required><br>
                        <input class="form-control" type="text" name="telefone" id="telefone" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" placeholder="CELULAR XX-XXXXX-XXXX" style="width: 50%" required><br>

                        <input class="form-control" type="text" name="cpf" id="cpf" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="CPF XXX.XXX.XXX-XX" style="width: 50%" required><br>
                        <input class="form-control" type="text" name="rg" id="rg" placeholder="Digite seu Rg" style="width: 50%" required><br>
                        <input class="form-control" type="text" name="profissao" id="profissao" placeholder="Profissao" style="width: 50%" required><br>                    

                        <input type="submit" value="Cadastrar" class="btn  btn-warning" style="color: #000000; width: 50%;">                             
                    </form>                   
                </div>
        </div>
    </div>
</body>
</html>