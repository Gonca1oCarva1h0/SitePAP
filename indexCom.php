<!DOCTYPE html>
<html lang="en">

<?php
session_start(); // Inicie a sessão
$registrado = isset($_SESSION['registrado']) && $_SESSION['registrado'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
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

    <nav>
        <ul>
            <?php if ($registrado == 1): ?>
                <li><a href="#" aria-haspopup="true">Pefil</a></li>
                <li><a href="update.html">Novidades</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="indexLogin.php">Login</a></li>
            <?php endif; ?>
            <li><a href="indexSobre.php">Sobre</a></li>
            <li><a class="active" href="indexCom.php">Contactos</a></li>


        </ul>
        <a href="index.php"><img
                src="https://assets.2k.com/1a6ngf98576c/2BKfXtZVcyuTTdoK6w0v3b/9fcc9fc9a973464469d0045e1685b711/Warchest_Nav_Logo.png"
                alt="Navigation Logo">
        </a>
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