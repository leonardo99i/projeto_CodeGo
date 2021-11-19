<?php
session_start();

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['username'] && !empty($_POST['senha']))){
        //acessa
        include_once('../Modelo/conexaoInscricao.php');
        $username = $_POST['username'];
        $senha = $_POST['senha'];

        //validacao 
        //print_r('Email:' .$username);
        //print_r('Senha:' .$senha);

        $sql = "SELECT * FROM inscricao_aluno WHERE username = '$username' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            //destroi a sessao se nao encontrar o usuario e senha no banco de dados
            unset($_SESSION['username']);
            unset($_SESSION['senha']);
            header('Location:../Visao/login.php');
            
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['senha'] = $senha;
            header('Location:../Visao/inicio.php');
        }


    }else{
        //nao acessa
        header('Location:../Visao/login.php');
    }


?>
