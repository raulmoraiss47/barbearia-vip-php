<?php
if (isset($_POST['usuario']) && isset($_POST['senha'])){
    include "conexao.php";
    session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tb_administrador where adm_login = '$usuario' and adm_senha = '$senha' ";

$resultado = mysqli_query($conexao, $sql);

$contaRegistros = mysqli_num_rows($resultado);

if($contaRegistros > 0){
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $_SESSION['adm_codigo'] = $dados['adm_codigo'];
        $_SESSION['adm_nome'] = $dados['adm_nome'];
        $_SESSION['adm_login'] = $dados['adm_login'];
        $_SESSION['adm_senha'] = $dados['adm_senha'];
    }
    header("location: ../telas/index.php");
}else{    
    header("location: ../index.php");
}

}

?>