<?php
    include_once('../Modelo/conexaoInscricao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE alunos SET nome='$nome', username='$username',
        email='$email', telefone='$telefone', senha='$senha' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: registros.php');
?>