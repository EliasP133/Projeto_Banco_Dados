<?php

$dbHost = '127.0.0.1:3306';
$dbUserName = 'root';
$dbPassword = 'senai.123';
$dbName = 'projetobd';

$conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);

/* if($conexao->connect_errno){
    echo("Erro de conexão");
} else{
    echo("Conexão realizada com sucesso");
} */

if (isset ($_POST['submit'])){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,cpf,email) values ('$nome','$cpf','$email')");

    
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
    
<form action="cadastro.php" method="POST">

<label for="Nome">Nome</label>
<input type="text" name="nome" id="nome"> <br>

<label for="CPF">CPF</label>
<input type="text" name="cpf" id="cpf" > <br>

<label for="email">Email</label>
<input type="text" name="email" id="nome" > <br>

<input type="submit" name="submit">



</form>

</body>

</html>