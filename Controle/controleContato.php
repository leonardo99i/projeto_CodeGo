<?php

$nome = $_POST['username'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$assunto = $_POST['text'];
$mensagem = $_POST['text_box'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/landing.css">
    <link rel="stylesheet" href="../img/background.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="shortcut icon" href="./img/favicon.ico">
    <title>Code>Go! - Mensagem</title>
</head>
<body>
<section>
    <header>
        <h2><a href="../landing.html" class="logo">CODE>GO!</a></h2>
    </header>
    <div class="content">
        <div class="info">
            <h2>Code>Go<br><span>Code Now.</span></h2>
            <p>Obrigado por nos contactar!<br>
                Nossa equipe está enpenhada para <br>
                trazer uma resposta o mais rápido possivel!
                <br>
                Equipe Code>Go!
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</section>
</body>