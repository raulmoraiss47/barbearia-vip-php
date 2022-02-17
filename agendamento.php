<?php
session_start();
?>

<?php
include "controle/conexao.php";


?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Agendamento</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	</head>
	<body>
	<nav class="navbar col-12 position-fixed navbar-expand-lg navbar-dark bg-dark mr-auto" style="z-index: 999;">
    <div class="container-fluid col-11 m-auto">
      <a class="navbar-brand" href="index.php"><img src="img/logoDourada.png" alt="" width="70" height="27"></a>
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
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="controle/clientes.php">Cadastrar</a>
          </li>       
          <li class="nav-item">
            <a class="nav-link" href="agendamento.php">Agendar</a>
          </li>    
          <li class="nav-item">
            <a class="nav-link" href="telas/listar.php">Agendamentos</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="../controle/sair.php">Sair</a>
          </li>
        </ul>        
      </div>
    </div>
  </nav><br><br><br><br><br><br>

<div class="container">		
	<h1>Agendamento</h1>
	<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
			}
			?><br>
<form class="form-horizontal" action="controle/processa.php" method="POST" style{width: 90%;}>
	

<select class="form-select" name="servico" aria-label="Default select example">
		<h1>raul</h1>
		<option>Serviço</option>
					<?php
						$result_servicos = "SELECT * FROM servicos";
						$resultado_servico = mysqli_query($conexao, $result_servicos);
						while($row_servicos = mysqli_fetch_assoc($resultado_servico)){ ?>
							<option value="<?php echo $row_servicos['id']; ?>"><?php echo $row_servicos['nome']; ?></option>
							 <?php
						}
					?>
					</select><br><br>
		</div>


	<select class="form-select" name="select_cabeleleiro" aria-label="Default select example">
		<h1>raul</h1>
		<option>Cabeleleiro</option>
					<?php
						$result_cabeleleiros = "SELECT * FROM cabeleleiros";
						$resultado_cabeleleiro = mysqli_query($conexao, $result_cabeleleiros);
						while($row_cabeleleiros = mysqli_fetch_assoc($resultado_cabeleleiro)){ ?>
							<option value="<?php echo $row_cabeleleiros['id']; ?>"><?php echo $row_cabeleleiros['nome']; ?></option> <?php
						}
					?>

					</select><br><br>

<select class="form-select" name="select_estabelecimento" aria-label="Default select example">
		<h1>raul</h1>
		<option>Estabelecimento</option>
					<?php
						$result_estabelecimentos = "SELECT * FROM estabelecimentos";
						$resultado_estabelecimento = mysqli_query($conexao, $result_estabelecimentos);
						while($row_estabelecimentos = mysqli_fetch_assoc($resultado_estabelecimento)){ ?>
							<option value="<?php echo $row_estabelecimentos['id']; ?>"><?php echo $row_estabelecimentos['nome']; ?></option> <?php
						}
					?>
					</select><br><br>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Data e Hora:</label><br>
					<div class="col-sm-10">
						<div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
							<input type="text" class="form-control" name="data" placeholder="Data da visita">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</span>
						</div> 
					</div>
				</div><br>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-warning">Agendar</button>
					</div>
				</div>
			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<script src="js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
		<script type="text/javascript">
			$('.data_formato').datetimepicker({
				weekStart: 1,
				todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1,
                language: "pt-BR",
                //startDate: '+0d'
			});
		</script>
	</body>
</html>