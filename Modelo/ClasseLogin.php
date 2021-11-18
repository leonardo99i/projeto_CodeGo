<?php
class Login
{
    private $usuario;
    private $senha;

    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($user)
    {
        $this->usuario = $user;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function FazerLogin($user, $senha)
    {
        // Define um valor de teste para usuário e senha
        $usuario_ = "Gerson";
        $senha_ = "123";

        // Inicia a sessão
        session_start();

        // Cria variáveis de sessão e atribui os valores recebidos por parâmetro
        $_SESSION["user"] = $user;
        $_SESSION["senha"] = $senha;
    
            // Verifica se a sessão do usuário está vazia
            if (empty($_SESSION["user"]) && empty($_SESSION["senha"])) {
                // Ação a ser executada: interrompe o script e manda uma mensagem
                exit("Usuário e/ou senha vazios");
                // Verifica se os valores das variáveis de sessão são iguais aos valores de teste
            } elseif (($_SESSION["user"] != $usuario_) || ($_SESSION["senha"] != $senha_)) {
                // Ação a ser executada: interrompe o script e manda uma mensagem
                exit("Usuário ou senha não encontrado.");
            } else {
                 // Direciona para a página inicio.php
                header("location:../Visao/inicio.php");
            }
        }

   function fazerLogout()
    {
        session_start();
        session_destroy();
        unset($_SESSION);
        header("location:../Visao/index.php");
    }
    
}