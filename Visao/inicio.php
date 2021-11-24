<?php
    session_start();
    include_once('../Modelo/conexaoInscricao.php');

    $sql = "SELECT * FROM inscricao_aluno ORDER BY id DESC";
    $result = $conexao->query($sql);
    //print_r($result);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
     if (empty($_SESSION["userame"]) && empty($_SESSION["senha"])) { 
        exit("Não foi possível fazer login, usuário e/ou senha inválidos");
     }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Inicio</title>
</head>

<body>
    
<div id="container">

<div class="row text-center">
   <div class="col-8">
     <?php 
          echo "<h2>Olá, seja bem-vindo(a) " . $_SESSION["username"] . "</h2>"; 
      ?>
     <form method="post" action="../Visao/login.php">
     <input type="submit" name="sair" class="btn btn-danger" value="Sair">
     </form>
   </div>
 </div>
</div>

</body>

</html>