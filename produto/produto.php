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

    $nome_produto = $_POST['nome_produto'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome_produto,preco,categoria) values ('$nome_produto','$preco','$categoria')");

    
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    
<form action="preco.php" method="POST">

<label for="Nome_Produto">Nome_Produto</label>
<input type="text" name="nome_produto" id="nome_produto"> <br>

<label for="Preco">Preco</label>
<input type="text" name="preco" id="preco"> <br>

<label for="Categoria">Categoria</label>
<input type="text" name="categoria" id="categoria" > <br>

<input type="submit" name="submit">



</form>

</body>

</html>