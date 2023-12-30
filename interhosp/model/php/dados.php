<?php
    require_once './conexao.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    $cadastro = "INSERT INTO usuario(nome, cpf, telefone, email, cep, endereco, senha)
                VALUES('$nome', '$cpf', '$telefone', '$email','$cep', '$endereco', '$senha')";

    if(mysqli_query($conexao, $cadastro))echo"</br>Usuário cadastrado com sucesso";
    else echo"</br>Não foi possivel cadastra-lo no momento, espere um pouco." .mysqli_connect_error($conexao);
?>