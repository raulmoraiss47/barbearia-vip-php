<?php
session_start();
//Conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
$data = $_REQUEST['data'];
$estabelecimento = $_REQUEST['estabelecimento'];
$servico = $_REQUEST['servico'];

//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data = explode(" ", $data);
list($date, $hora) = $data;
$data_sem_barra = array_reverse(explode("/", $date));
$data_sem_barra = implode("-", $data_sem_barra);
$data_sem_barra = $data_sem_barra . " " . $hora;

//Salvar no BD
$result_data = "INSERT INTO horarios (estabelecimento, servico, data) VALUES ('$estabelecimento', '$servico', '$data_sem_barra')";
$resultado_data = mysqli_query($conexao, $result_data);

//Verificar se salvou no banco de dados através "mysqli_insert_id" o qual verifica se existe o ID do último dado inserido
if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<div class='alert alert-success'> Data cadastrada com sucesso ! </div>";
	header("Location: ../agendamento.php");
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger'> Erro ao cadastradar a data </div>";
	//header("Location: index.php");
}

