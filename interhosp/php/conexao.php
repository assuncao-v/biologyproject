<?php
    $servidor = 'localhost';
    $nome = 'root';
    $senha = '';
    $nomeDoDatabase = 'interhosp';

    $conexao = new mysqli($servidor,$nome,$senha,$nomeDoDatabase);

    if($conexao->connect_errno)echo"Erro";
    else echo"Conexão efetuada com sucesso!";
?>