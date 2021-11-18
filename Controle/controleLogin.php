<?php
//importa a classe Login
include_once("../Modelo/ClasseLogin.php");
//cria um objeto do tipo Login
$login = new Login();

if (isset($_POST["entrar"])) {
    //executa o método FazerLogin() passando os valores do formulário
    $login->FazerLogin($_POST["username"], $_POST["password"]);
}
if (isset($_POST["sair"])) {
    //executa o método fazerLogout()
    $login->fazerLogout();
}
?>