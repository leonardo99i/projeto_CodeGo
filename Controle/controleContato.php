<?php

$nome = $_POST['username'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$assunto = $_POST['text'];
$mensagem = $_POST['text_box'];

echo '

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code>Go! - Contato</title>
</head>
<body>
    <div class="container">
        <h1>Obrigada por nos contatar. Em breve responderemos sua pergunta!</h1>
        <p class="back">Voltar para<a href="index.php"></a> a pagina de inicio</p>

    </div>


    
</body>
</html>

';


?>