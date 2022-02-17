<?php
session_start();
//var_dump($_SESSION);

if (isset($_SESSION['adm_login']) && isset($_SESSION['adm_senha'])){

    include "conexao.php";  
    
  //  echo "ola raul <br><br><br><br>";

$usuario = $_SESSION['adm_login'];
$senha = $_SESSION['adm_senha'];

$sql = "SELECT * FROM tb_administrador where adm_login = '$usuario' and adm_senha = '$senha'";
//echo $sql;
$resultado = mysqli_query($conexao, $sql);

$contaRegistros = mysqli_num_rows($resultado);
 //echo $contaRegistros;

if($contaRegistros < 0){ 

    header("location: ../telas/index.php");
}
else{
  // header("location: ../index.php");
}

}else{
    // header("location: ../index.php");
}

?>