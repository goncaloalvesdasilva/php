<?php

    $dbHost = 'Localhost';
    $dbUsername = 'asfret09_root';
    $dbPassword = '55126021@Loja';
    $dbName = 'asfret09_clientes';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>