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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download do Jogo</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/scripts.js"></script>
</head>

<body>




    <nav role="navigation">
        <ul>
            <?php if ($registrado == 1): ?>
                <li><a href="perfil.php" class="active">Perfil</a></li>
                <li><a href="update.html">Novidades</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="indexLogin.php">Login</a></li>
            <?php endif; ?>
            <li><a href="indexSobre.php">Sobre</a></li>
            <li><a href="indexCom.php">Contactos</a></li>







        </ul>

        <a href="index.php" style="color: white; font-size: 30px;">
            <img src="https://assets.2k.com/1a6ngf98576c/2BKfXtZVcyuTTdoK6w0v3b/9fcc9fc9a973464469d0045e1685b711/Warchest_Nav_Logo.png"
                </a>
    </nav>

    <header class="jumbotron">
    </header>
    <main id="inicio">

        <div class="text">

            <?php echo $username; ?>


            <?php echo $password; ?>

        </div>
    </main>
</body>

</html>