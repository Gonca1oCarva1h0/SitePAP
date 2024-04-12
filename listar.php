<!DOCTYPE html>
<html>



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
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/scripts.js"></script>
    <style>
        table {

            font-size: 130%;
            color: #808080;
            font-family: Algoria;
            margin: 20%;
            text-align: justify;
            line-height: 1.5;
            font-weight: bold;
            margin-top: 10px;
            margin-left: 20%;
            text-decoration: none;

        }
    </style>
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
    <header class=" jumbotron">
    </header>


    <?php
    $conexao = mysqli_connect('localhost', 'root', '');
    if (!$conexao) {
        echo '<p> Falha na ligação.';
        exit;
    }
    mysqli_select_db($conexao, 'pap');
    $consulta = "select * from users";
    $result = mysqli_query($conexao, $consulta);
    $nregistos = mysqli_num_rows($result);
    ?>


    <center>
        <table border="1">
            <tr>
                <td> Email:
                <td> Nome:
                <td> Nascimento:

                    <?php
                    for ($i = 0; $i < $nregistos; $i++) {
                        $registo = mysqli_fetch_assoc($result);
                        echo '<tr>';
                        echo '<td>' . $registo['email'] . '</td>';
                        echo '<td>' . $registo['username'] . '</td>';
                        echo '<td>' . $registo['nascimento'] . '</td>';
                        echo '</tr>';
                        echo '</p>';
                    }
                    ?>
        </table>
    </center>
</body>

</html>