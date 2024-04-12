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


        button {
            background-color: #808080;
            color: black;
            font-weight: bold;
            font-size: 130%;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: white;
        }

        input[id="nascimento"] {
            font-size: 20px;
            text-align: center;
        }



        a[id="Voltar"] {
            color: #white;
            font-size: 25px;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="indexLogin.php">Login</a></li>
            <li><a href="indexSobre.php">Sobre</a></li>
            <li><a href="indexCom.php">Contacto</a></li>


        </ul>
        <a href="index.php"><img src="https://i.postimg.cc/cH7WJtg6/imagem-2024-04-08-092201859-removebg-preview.png"
                alt="Navigation Logo" class="navbar"></a>
    </nav>
    <header class="jumbotron">
    </header>
    <main id="inicio">
        <form action="register.php" method="post">


            <div class="form">


                <label for="email" class="placeholder">Email</label>
                <input id="email" class="input" type="text" placeholder=" " name="email" />
                <div class="cut"></div>

            </div>

            <div class="input-container ic2">
                <label for="username class=" placeholder">Username</label>
                <input id="username" class="input" type="text" placeholder=" " name="username" />
                <div class="cut"></div>

            </div>

            <div class="input-container ic2">
                <label for="numero" class="placeholder">Data de Nascimento</label>
                <input id="nascimento" class="input" type="date" placeholder=" " name="nascimento" />
                <div class=" cut">
                </div>

            </div>
            <div class="input-container ic2">
                <label for="password" class="placeholder">Password</label>
                <input id="password" class="input" type="password" placeholder=" " name="password" />
                <div class="cut cut-short"></div>

            </div>

            <button type="submit" class="submit">Registar</button>

            </div>


            <?php
            session_start();
            if (isset($_SESSION['notification'])) {
                echo '<div style="color: white; padding: 10px; border: 1px solid white; margin-bottom: 10px; font-family"; letter-spacing: 3px;>' . $_SESSION['notification'] . '</div>';
                unset($_SESSION['notification']); // Clear the notification after displaying
            }
            ?>

        </form>
        <br>
        <br>
        <br>

        <a id="Voltar" href="indexLogin.html">Voltar atrás</a>
    </main>
    <footer>
        <p>&copy; Made By Gonçalo Carvalho</p>
    </footer>
</body>

</html>