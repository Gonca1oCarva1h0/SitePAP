<!DOCTYPE html>
<html lang="en">

<?php
session_start(); // Inicie a sessão
$registrado = isset($_SESSION['registrado']) && $_SESSION['registrado'];
if ($registrado == 1):
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $email = $_SESSION['email'];

    $tipo = $_SESSION['tipo'];
endif;
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

        <div class="text">
            <center>
                <p></p>
                Nome:
                <?php echo $username; ?>
                <p></p>
                Password:
                <?php echo $password; ?>
                <p></p>
                Email:
                <?php echo $email; ?>



                <p></p>
                <P></P>

                <form action="logout.php" method="post">
                    <button type="submit">Logout</button>
                </form>
            </center>
        </div>

    </main>
</body>

</html>