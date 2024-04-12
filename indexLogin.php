<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Download do Jogo</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/scripts.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 180%
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #808080;
            color: black;
            font-weight: bold;
            font-size: 130%;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: white;
        }

        a[id="Voltar"] {
            color: #808080;
            font-size: 25px;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li class="active"><a href="indexLogin.php">Login</a></li>
            <li><a href="indexSobre.php">Sobre</a></li>
            <li><a href="indexCom.php">Contacto</a></li>


        </ul>
        <a href="index.php"><img src="https://i.postimg.cc/cH7WJtg6/imagem-2024-04-08-092201859-removebg-preview.png"
                alt="Navigation Logo" class="navbar"></a>
    </nav>
    <header class="jumbotron">
    </header>


    <main id="inicio">





        <form action="login.php" method="POST">
            <center>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" name="submit" value="login"></input>
            </center>
        </form>


        <?php
        session_start();
        if (isset($_SESSION['notification'])) {
            echo '<div style="color: white; padding: 10px; border: 1px solid #808080; margin-bottom: 10px; font-family"; letter-spacing: 3px;>' . $_SESSION['notification'] . '</div>';
            unset($_SESSION['notification']); // Clear the notification after displaying
        }
        ?>

        <br>
        <br>
        <a id="Voltar" href="indexRegister.php">Registe-se aqui</a>
    </main>
    <footer>
        <p>&copy; Feito por Gonçalo Carvalho</p>
    </footer>
</body>

</html>