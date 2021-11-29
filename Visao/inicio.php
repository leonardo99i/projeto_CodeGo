<?php
session_start();
include_once('../Modelo/conexaoInscricao.php');

$sql = "SELECT * FROM alunos ORDER BY id DESC";
$result = $conexao->query($sql);
//print_r($result);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!------ PHP ------->
    <?php
    if (empty($_SESSION["userame"]) && empty($_SESSION["senha"])) {
        exit("Não foi possível fazer login, usuário e/ou senha inválidos");
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/vars.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/sobre.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="../css/planos.css" rel="stylesheet">
    <link href="../css/rodape.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Source+Code+Pro:wght@700&display=swap');
    </style>
    <title>Inicio Code>Go!</title>

</head>

<body>
    <!---HTML--------->
    <div class="sair">
        <?php
        echo '<h2 style="color: black; text-align: center; font-size: 35px; background-color: #E4E9F7;">Olá, seja bem-vindo(a) ' . $_SESSION["username"] . '</h2>';
        ?>
        <form method="post" action="../Visao/login.php" style="background-color: #E4E9F7" ;>
        <br>
            <input type="submit" name="sair" class="btn" value="Sair" style="background-color: #E4E9F7; align-items: center; display: block; width: 10%; padding: 15px; background-color: #31a3ff; color: white;
                border: none;
                border-radius: 10px;
                font-size: 20px;
                font-weight: 600;
                opacity: 0.8;
                margin: 0 auto;
                transition: .2s all;
                cursor: pointer;  
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;">
        </form>
    </div>
    <section class="planos container">
        <h1 class="conteudo__titulo">Área de Cursos</h1>
        <br>
        <br>
        <ul class="planos__cartoes">
            <li class="cartao cartao--ultra">
                <h3 class="cartao__titulo">Python</h3>
                <div class="cartao__conteudo ">
                    <img src="../img/python.png" class="foto_Laura">
                    <a href="https://www.youtube.com/watch?v=S9uPNppGsGo&list=PLHz_AreHm4dlKP6QQCekuIPky1CiwmdI6" class="cartao__botao cartao__botao--ultra botao" target="_blank">Fazer Curso</a>
                </div>
            </li>
            <li class="cartao cartao--ultra">
                <h3 class="cartao__titulo">Java</h3>
                <div class="cartao__conteudo">
                    <img src="../img/java.png" class="foto_Leo">
                    <a href="https://www.youtube.com/watch?v=sTX0UEplF54&list=PLHz_AreHm4dkI2ZdjTwZA4mPMxWTfNSpR" class="cartao__botao cartao__botao--ultra botao" target="_blank">Fazer Curso</a>
                </div>
            </li>
            <li class="cartao cartao--ultra">
                <h3 class="cartao__titulo">PHP</h3>
                <div class="cartao__conteudo">
                    <img src="../img/php.png" class="foto_Tauany">
                    <a href="https://www.youtube.com/watch?v=F7KzJ7e6EAc&list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k" class="cartao__botao cartao__botao--ultra botao" target="_blank">Fazer Curso</a>
                </div>
            </li>
        </ul>
    </section>
    <section class="planos container">
        <ul class="planos__cartoes">
            <li class="cartao cartao--ultra">
                <h3 class="cartao__titulo">Git</h3>
                <div class="cartao__conteudo ">
                    <img src="../img/git.png" class="foto_Laura">
                    <a href="https://www.youtube.com/watch?v=xEKo29OWILE&list=PLHz_AreHm4dm7ZULPAmadvNhH6vk9oNZA" class="cartao__botao cartao__botao--ultra botao" target="_blank">Fazer Curso</a>
                </div>
            </li>
            <li class="cartao cartao--ultra">
                <h3 class="cartao__titulo">SQL</h3>
                <div class="cartao__conteudo">
                    <img src="../img/sql.png" class="foto_Leo">
                    <a href="https://www.youtube.com/watch?v=Ofktsne-utM&list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r" class="cartao__botao cartao__botao--ultra botao" target="_blank">Fazer Curso</a>
                </div>
            </li>
            <li class="cartao cartao--ultra">
                <h3 class="cartao__titulo">Ruby</h3>
                <div class="cartao__conteudo">
                    <img src="../img/ruby.png" class="foto_Tauany">
                    <a href="https://www.youtube.com/watch?v=bLDH3NypOVo&list=PLnV7i1DUV_zOit4a_tEDf1_PcRd25dL7e" class="cartao__botao cartao__botao--ultra botao" target="_blank">Fazer Curso</a>
                </div>
            </li>
        </ul>
    </section>

</body>
<footer class="rodape">
    <img src="../img/Screenshot_20210907-120233_Logo_Maker.jpg" alt="Logo da Apeperia" class="rodape__logo">
    <ul class="rodape__social">
        <li><a href="#" class="rodape__midia"><img src="../img/facebook.png" alt="Ícone do Facebook"></a></li>
        <li><a href="#" class="rodape__midia"><img src="../img/twitter.png" alt="Ícone do Twitter"></a></li>
        <li><a href="#" class="rodape__midia"><img src="../img/instagram.png" alt="Ícone do Instagram"></a></li>
    </ul>
    <nav>
        <ul class="rodape__navegacao">
            <li class="rodape__link"><a href="../sobre.html">Sobre</a></li>
            <li class="rodape__link"><a href="../planos.html">Planos</a></li>
            <li class="rodape__link"><a href="../cursos.html">Cursos</a></li>
            <li class="rodape__link"><a href="contato.php">Contato</a></li>
        </ul>
    </nav>
</footer>

</html>