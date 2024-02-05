<!DOCTYPE html>
<html lang="en">

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
                <li><a href="perfil.php" aria-haspopup="true">Pefil</a></li>
                <li><a href="update.html">Novidades</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="indexLogin.php">Login</a></li>
            <?php endif; ?>
            <li><a class="active" href="indexSobre.php">Sobre</a></li>
            <li><a href="indexCom.php">Contactos</a></li>




        </ul>
        <a href="index.php"><img
                src="https://assets.2k.com/1a6ngf98576c/2BKfXtZVcyuTTdoK6w0v3b/9fcc9fc9a973464469d0045e1685b711/Warchest_Nav_Logo.png"
                alt="Navigation Logo"></a>
    </nav>

    <header class="jumbotron">
    </header>
    <main id="inicio">
        <div class="textTitle">
            <p>LOREM IPSUM</p>
        </div>

        <div class="text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>



    </main>

</body>

</html>