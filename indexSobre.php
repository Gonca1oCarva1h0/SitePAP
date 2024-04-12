<!DOCTYPE html>
<html lang="en">

<?php
session_start(); // Inicie a sessão
$registrado = isset($_SESSION['registrado']) && $_SESSION['registrado'];
if ($registrado == 1):
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $tipo = $_SESSION['tipo'];
endif; ?>



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
        <div class="textTitle">
            <p>CHIVUKUVUKU:
                <br>A CORRIDA PELO TRONO
            </p>
        </div>

        <div class="text">
            "Chivukuvuku: A Corrida pelo Trono", é uma mistura de ficção
            científica, aventura, competição e estratégia. O jogo passa-se num cenário futurista, habitado
            por uma raça alienígena chamada Chivukuvuku. Os elementos do jogo incluem a busca pelo
            poder e a luta pelo trono entre os membros desta sociedade alienígena, juntamente com
            desafios de combate, alianças e traições.
        </div>



    </main>

</body>

</html>