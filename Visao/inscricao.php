<?php
if (isset($_POST['submit'])) {
    include_once('../Modelo/conexaoInscricao.php');

    $nome = $_POST['nome'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO alunos(nome, username, email, telefone, senha) 
        VALUES('$nome', '$username', '$email', '$telefone', '$senha')");

    header('Location:../Visao/login.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/vars.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/contato.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="../css/rodape.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <title>Inscrição - Code>Go!</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-terminal icon'></i>
            <div class="logo_name"><a href="../landing.html">Code>Go!</a></div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="../sobre.html">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Sobre</span>
                </a>
                <span class="tooltip">Sobre</span>
            </li>
            <li>
                <a href="../planos.html">
                    <i class='bx bx-cart'></i>
                    <span class="links_name">Planos</span>
                </a>
                <span class="tooltip">Planos</span>
            </li>
            <li>
                <a href="../cursos.html">
                    <i class='bx bxs-graduation'></i>
                    <span class="links_name">Cursos</span>
                </a>
                <span class="tooltip">Cursos</span>
            </li>

            <li>
                <a href="contato.html">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Contato</span>
                </a>
                <span class="tooltip">Contato</span>
            </li>
            <li>

            <li class="profile">
                <div class="profile-details">
                    <div class="name_job">
                        <div class="name">Code>Go!</div>
                        <div class="job">Cursos de Tecnologia</div>
                    </div>
                    <i class='bx bx-code-alt' id="log_out"></i>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <section class="principal">
            <div class="container">
                <div class="box">
                    <h1>Inscricao</h1>
                    <form action="../Visao/inscricao.php" method="POST">
                        <fieldset>
                            <div class="user">
                                <i class="far fa-address-card"></i>
                                <input type="text" name="nome" id="nome" autocomplete="off" placeholder="Nome" pattern="[A-Za-z\s]+$" maxlength="30" required>
                                <label for="nome"></label>
                                <br>
                                <i class="far fa-address-card"></i>
                                <input type="text" name="username" id="username" autocomplete="off" placeholder="Username" pattern="[A-Za-z\s]+$" maxlength="15" required>
                                <label for="username"></label>
                                <br>

                                <i class="fas fa-at"></i>
                                <input type="text" name="email" id="email" autocomplete="off" placeholder="email@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                <label for="email"></label>
                                <br>

                                <i class="fas fa-mobile-alt"></i>
                                <input type="tel" name="telefone" id="telefone" autocomplete="off" placeholder="XXXXXX-XXXXX" pattern="[0-9]{7}-[0-9]{4}" required />
                                <label for="telefone"></label>
                                <br>

                                <i class="fas fa-unlock-alt"></i>
                                <label for="senha"></label>
                                <input type="password" name="senha" id="senha" autocomplete="off" placeholder="Digite a Senha" pattern=".{8,}" required />
                                <br>

                            </div>
                    </form>
                    <div class="enviar-btn">
                        <input type="submit" name="submit" id="submit" class="btn" onclick="return validar()">
                        <br>
                    </div>
                </div>
            </div>
            </fieldset>
            </form>
            </div>
        </section>

    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
        });

        searchBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
        });


        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        }
    </script>

    <div class="home-section_f">
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
    </div>
</body>

</html>