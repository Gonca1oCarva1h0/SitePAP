<!DOCTYPE html>
<html lang="en">

<?php
session_start(); // Inicie a sessão
$registrado = isset($_SESSION['registrado']) && $_SESSION['registrado'];
if ($registrado == 1):
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $tipo = $_SESSION['tipo'];
endif;
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/scripts.js"></script>



</head>

<body>

    <nav role="navigation">
        <ul>
            <?php if ($registrado == 1): ?>
                <li>
                    <a href="perfil.php">
                        Bem Vindo
                        <?php echo $username; ?>
                    </a>
                </li>
                <li><a href="novidades.php">Novidades</a></li>
                <?php if ($tipo == "admin"): ?>
                    <li><a href="listar.php">listar</a></li>
                <?php endif; ?>

            <?php else: ?>
                <li><a href="indexLogin.php">Login</a></li>
            <?php endif; ?>
            <li><a href="indexSobre.php">Sobre</a></li>
            <li><a href="indexCom.php">Contactos</a></li>

        </ul>

        <a href="index.php" index.php" style="color: white; font-size: 30px;">
            <img src="https://i.postimg.cc/cH7WJtg6/imagem-2024-04-08-092201859-removebg-preview.png"
                class="navbar"></a>
    </nav>

    <header class="jumbotron">
    </header>

    <main id="inicio">


        <a><img src="src/pics/IMG20230206140002.jpg" alt="Eu" class="pfpimage"></a>


        <div class="textsobre">
            <div class="email">
                <h2>Emails</h2>
                <p>
                    <i class="fas fa-envelope"></i> Pessoal: <a href="mailto:goncaloc770@gmail.com"
                        target="_blank">goncaloc770@gmail.com</a>
                    <br><br>
                    <i class="fas fa-envelope"></i> Institucional: <a
                        href="mailto:27095.goncalocarvalho@escolaaugustogomes.pt"
                        target="_blank">27095.goncalocarvalho@escolaaugustogomes.pt</a>
                </p>
                <br>
                <br>
            </div>
            <div class="contactos">
                <h2>Redes Sociais</h2>
                <p>
                    <i class="fab fa-instagram"></i> Instagram: <a href="https://www.instagram.com/_carvalho_goncalo_"
                        target="_blank">@_carvalho_goncalo_</a>
                    <br><br>
                    <i class="fab fa-snapchat-ghost"></i> Snapchat: @goncalo_162
                    <br><br>
                    <i class="fab fa-twitter"></i> Twitter/X: <a href="https://twitter.com/goncalo770"
                        target="_blank">@goncaloc770</a>
                    <br><br>
                </p>
            </div>
            <br><br><br>


        </div>
    </main>






</body>

</html>