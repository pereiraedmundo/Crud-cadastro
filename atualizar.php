<?php

include 'conexao.php';

$id = $_POST['id'];
$cpf = $_POST['cpf'];
$nomepessoa = $_POST['nomepessoa'];
$email = $_POST['email'];


$sql = "UPDATE `cadastro` SET `cpf`='$cpf',`nomepessoa`='$nomepessoa',`email`='$email' WHERE id_pessoa = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  

 <div class="container" style="width: 400px">
 <center>
    <h3>Atualizado com sucesso</h3>
    <div style="margin-top: 10px">
    <a href="listar.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
    </div>
 </center>


 </div>
   








