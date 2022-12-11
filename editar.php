<?php

include 'conexao.php';

$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  
    
    <style>
        #tamanhoContainer{
            width: 500px;

        }

        #botao {
            background-color: #604830; /*color de fundo*/ 
            color: #ffffff; /*cor da letra*/
            font-weight: bold;

        }

        label {
            font-weight: bold;

        }
    </style>

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">
<div style="text-align: right">
       <a href="listar.php" class="btn btn-primary btn-sm" >Voltar</a>
</div> 
<h4>Formulário de Cadastro</h4>

<form action="atualizar.php" method="post" style="margin-top: 20px">
    <!--O CODIGO ABAIXO VAI EXIBIR OS CAMPOS NOVAMENTE PARA EDIÇÃO APÓS CLICAR NO BOTÃO "EDITAR" -->
    <?php

    $sql = "SELECT * FROM `cadastro` WHERE id_pessoa= $id";
    $buscar = mysqli_query($conexao,$sql);
    while ($array = mysqli_fetch_array($buscar)) {
        $id_pessoa = $array['id_pessoa'];
        $cpf = $array['cpf'];
        $nomepessoa = $array['nomepessoa'];
        $email = $array['email'];        
    ?>
    <div class="form-group">
        <label>Cpf: </label>
        <input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?>" >
        <input type="text" class="form-control" name="id" value="<?php echo $id ?>"style="display: none">
    </div>

    <div class="form-group">
        <label>Nome: </label>
        <input type="text" class="form-control" name="nomepessoa" value="<?php echo $nomepessoa ?>">
    </div> 
    <div class="form-group">
        <label>Email: </label>
        <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
    </div>      

    
    
    </div>
    </div>
    </select>
    <br>
    <div>
        <div class="botao" style="text-align: right">
        <button type="submit" id="botao" class="btn btn-primary btn-sm" >Atualizar</button>
        </div>
    </div>
    
<?php } ?>
</form>


 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>
