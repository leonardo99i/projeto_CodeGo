<?php
    include_once('../Modelo/conexaoInscricao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $tel = $_POST['telefone'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE inscricao_aluno SET nome='$nome', username='$username',
        email='$email', telefone='$tel', senha='$senha' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: registros.php');
?>