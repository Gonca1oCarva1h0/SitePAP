<!DOCTYPE html>
<html lang="en">

<?php
session_start(); // Inicie a sessão
$registrado = isset($_SESSION['registrado']) && $_SESSION['registrado'];
$username = isset($_SESSION['username']) && $_SESSION['username'];
$password = isset($_SESSION['password']) && $_SESSION['password'];
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
                <li>
                    <a href="">
                        Bem Vindo
                        <?php echo $username; ?>
                    </a>
                </li>
                <li><a href="update.html">Novidades</a></li>
                <li><a href="listar.php">listar</a></li>
                <li><a href="logout.php">Logout</a></li>

            <?php else: ?>
                <li><a href="indexLogin.php">Login</a></li>
            <?php endif; ?>
            <li><a href="indexSobre.php">Sobre</a></li>
            <li><a href="indexCom.php">Contactos</a></li>

        </ul>

        <a href="index.php" index.php" style="color: white; font-size: 30px;">
            <img
                src="https://assets.2k.com/1a6ngf98576c/2BKfXtZVcyuTTdoK6w0v3b/9fcc9fc9a973464469d0045e1685b711/Warchest_Nav_Logo.png"></a>
    </nav>

    <header class=" jumbotron">
    </header>

    <main>

        <a id="download-link" download="FilipeOAventureiro.zip" style="display: none;"></a>
        <div class="center">
            <button id="download"><span>Download</span></button>
        </div>



        <hr>

        <div class="textTitle">
            <p>BORDERLANDS COLLECTION:</p>
            <p>PANDORA'S BOX</p>
        </div>

        <div class="text">
            Get the complete Borderlands experience with this all-in-one
            collection, including all six acclaimed base games, as well as all
            the add-on content for Borderlands, Borderlands 2, Borderlands:
            The Pre-Sequel, Tales from the Borderlands, Borderlands 3, and
            New Tales from the Borderlands in one giant bundle.
            <p></p>
            Experience the iconic franchise that defined the looter-shooter
            genre with its over-the-top firefights, absurdly varied arsenals,
            and thrilling interplanetary adventures perfect for solo and co-op.
        </div>

    </main>
    <footer>
        <p>&copy; Made By Gonçalo Carvalho</p>
    </footer>

</body>

</html>