<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
	<title>Listar Agendamentos</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
</head>
<body>
<nav class="navbar col-12 position-fixed navbar-expand-lg navbar-dark bg-dark mr-auto" style="z-index: 999;">
    <div class="container-fluid col-11 m-auto">
      <a class="navbar-brand" href="index.php"><img src="../img/logoDourada.png" alt="" width="70" height="27"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#servicos">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contato.php">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controle/clientes.php">Cadastrar</a>
          </li>       
          <li class="nav-item">
            <a class="nav-link" href="../agendamento.php">Agendar</a>
          </li>    
          <li class="nav-item">
            <a class="nav-link" href="listar.php">Agendamentos</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="../controle/sair.php">Sair</a>
          </li>
        </ul>        
      </div>
    </div>
  </nav><br><br><br><br><br>
<?php 
	session_start();
	include_once("../controle/conexao.php");	

	//echo "<a href='index.php'>Cadastrar</a><br><br>";	 
	echo "<h1>Visitas agendas para o dia de hoje</h1>";
	
	$result_horarios = "SELECT * FROM horarios WHERE DAY(data) = DAY(CURDATE()) AND MONTH(data) = MONTH(CURDATE()) AND YEAR(data) = YEAR(CURDATE())";
	$resultado_horarios = mysqli_query($conexao, $result_horarios);
	while($row_horarios = mysqli_fetch_array($resultado_horarios)){
		echo "Serviço: ".$row_horarios['estabelecimento']."<br>";
		echo "Horário: ".date('d/m/Y H:i:s', strtotime($row_horarios['data']))."<hr>";
	}


	
	echo "<h1>Visitas deste mês</h1>";
	
	$result_horarios = "SELECT * FROM horarios WHERE MONTH(data) = MONTH(CURDATE()) AND YEAR(data) = YEAR(CURDATE())";
	$resultado_horarios = mysqli_query($conexao, $result_horarios);
	while($row_horarios = mysqli_fetch_array($resultado_horarios)){
		echo "Serviço: ".$row_horarios['estabelecimento']."<br>";
		echo "Horário: ".date('d/m/Y H:i:s', strtotime($row_horarios['data']))."<hr>";
	}
	?>






<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
	</body>
</html>