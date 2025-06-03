<?php

$dbHost = '127.0.0.1:3306';
$dbUserName = 'root';
$dbPassword = 'senai.123';
$dbName = 'projetobd';

$conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);
/* 
if($conexao->connect_errno){
    echo("Erro de conexão");
} else{
    echo("Conexão realizada com sucesso");
}  */


if (isset ($_POST['submit'])){

    $nome_funcionario = $_POST['nome_funcionario'];
    $rg_funcionario = $_POST['rg_funcionario'];
    $setor = $_POST['setor'];
    

  
    $result = mysqli_query($conexao,"INSERT INTO funcionario(nome_funcionario,rg_funcionario,setor) values ('$nome_funcionario','$rg_funcionario','$setor')");
 
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
<form action="funcionario.php" method="POST">

<label for="nome_funcionario">Nome_Funcionario</label>
<input type="text" name="nome_funcionario" id="nome_funcionario"> <br>

<label for="rg_funcionario">Rg_Funcionario</label>
<input type="text" name="rg_funcionario" id="rg_funcionario" > <br>

<label for="setor">setor</label>
<input type="text" name="setor" id="setor" > <br>

<input type="submit" name="submit">



</form>

</body>

</html>