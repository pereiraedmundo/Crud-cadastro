<?php

include 'conexao.php';//comunicação com arquivo de conexao

$cpf = $_POST['cpf'];
$nomepessoa = $_POST['nomepessoa'];
$email = $_POST['email'];

$sql = "INSERT INTO `cadastro`(`cpf`, `nomepessoa`, `email`) VALUES ('$cpf','$nomepessoa','$email');";

$inserir = mysqli_query($conexao,$sql);

?>
  <!--DESIGN DA TELA DE CONFIRMAÇÃO -->

    <!--COPIANDO LINK DO BOOTSTRAPE -->

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
<div class="container" style="width: 500px;margin-top: 20px">

  <!--TELA DE MENSAGEM -->

<center>
    <h4>Cadastro realizado com sucesso!</h4>
</center>

<div style="padding-top: 20px">
    <center>
<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar nova pessoa!!</a>
</center>
</div>

</div> 









