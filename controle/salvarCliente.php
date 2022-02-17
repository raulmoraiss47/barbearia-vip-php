<?php
include "../controle/ver_login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
  <title>BarberShop</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).on('load', function(){
    $('#modal').modal('show');
});
</script>

</head>
<body style="background-color: #f4f4f4;">

    <div class="modal fade" id="modal" tabindex="-1" role="dialog ">
        <div class="modal-dialog"  role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Confirmação</h3>
            </div>
                <div class="modal-body">
                <?php
                    include "conexao.php";
                    $nome =  $_POST['nome'];
                    $telefone =  $_POST['telefone'];
                    $cpf =  $_POST['cpf'];
                    $rg =  $_POST['rg'];
                    $profissao =  $_POST['profissao'];

                    $sql = "INSERT INTO `tb_clientes` (`id_cli`, `nome_cli`, `telefone_cli`, `cpf_cli`, `rg_cli`, `profissao_cli`) VALUES (NULL, '$nome', '$telefone', '$cpf', '$rg', '$profissao');";

                    mysqli_query($conexao, $sql);

                    echo"Cliente Salvo com Sucesso!";
                    ?>
               
                </div>

                <div class="modal-footer">
                    <a class="btn btn-warning" href="../telas" role="button">Voltar</a>
                </div>
            </div>



        </div>

    </div>


  





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>