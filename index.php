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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download do Jogo</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css" />
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