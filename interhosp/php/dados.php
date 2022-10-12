<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    $cadastro = "INSERT INTO usuario(nome, cpf, telefone, email, endereco, senha)
                VALUES('$nome', '$cpf', '$telefone', '$email', '$endereco', '$senha')";

    if(mysqli_query($conexao, $cadastro))echo"</br>Usuário cadastrado com sucesso";
    else echo"</br>Não foi possivel cadastra-lo no momento, espere um pouco." .mysqli_connect_error($conexao);
?>