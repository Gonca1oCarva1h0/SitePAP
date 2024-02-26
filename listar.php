<!DOCTYPE html>
<html>
<?php
session_start(); // Inicie a sessão
$username = isset($_SESSION['username']) && $_SESSION['username'];
?>






<head>
    <title> Listar</title>
</head>

<body>




    <nav role="navigation">
        <ul>

            <li>
                <a href="">
                    Bem Vindo
                    <?php echo $username; ?>
                </a>
            </li>
            <li><a href="update.html">Novidades</a></li>
            <li><a href="listar.php">listar</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="indexSobre.php">Sobre</a></li>
            <li><a href="indexCom.php">Contactos</a></li>

        </ul>

        <a href="index.php" index.php" style="color: white; font-size: 30px;">
            <img
                src="https://assets.2k.com/1a6ngf98576c/2BKfXtZVcyuTTdoK6w0v3b/9fcc9fc9a973464469d0045e1685b711/Warchest_Nav_Logo.png"></a>
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

    <table border="1">
        <tr>
            <td> Email:
            <td> Nome:
            <td> Nascimento:
            <td> Password:

                <?php
                for ($i = 0; $i < $nregistos; $i++) {
                    $registo = mysqli_fetch_assoc($result);
                    echo '<tr>';
                    echo '<td>' . $registo['email'] . '</td>';
                    echo '<td>' . $registo['username'] . '</td>';
                    echo '<td>' . $registo['nascimento'] . '</td>';
                    echo '<td>' . $registo['password'] . '</td>';
                    echo '</tr>';
                    echo '</p>';
                }
                ?>
    </table>
</body>

</html>