<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'inscricao';

$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno){
    echo"Erro";
}else{
    echo"Conexao efetuada com sucesso";
}

?>