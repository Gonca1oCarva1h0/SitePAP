<html>



<head>
    <title> Resgistar </title>
</head>

<body>


    <h2> Inserir Registos </h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $tipo = 'user';
        $nascimento = isset($_POST['nascimento']) ? date('Y-m-d', strtotime($_POST['nascimento'])) : '';






        if (!$username || !$password || !$email || !$tipo || !$nascimento) {
            echo 'Campos em falta. Volte atrás e tente de novo.';
            exit;
        }

        echo 'Dados recebidos: <br />';
        echo 'Username: ' . $username . '<br />';
        echo 'Password: ' . $password . '<br />';
        echo 'Email: ' . $email . '<br />';
        echo 'Tipo: ' . $tipo . '<br />';
        echo 'Nascimento: ' . $nascimento . '<br />';





        $conexao = mysqli_connect('localhost', 'root', '');

        if (!$conexao) {
            echo '<p> Erro: Falha na ligação.';
            exit;
        }

        mysqli_select_db($conexao, 'pap');
        $insere = "INSERT INTO users VALUES ('$username','$password','$email',  '$tipo', '$nascimento' )";
        $result = mysqli_query($conexao, $insere);

        if ($result) {
            header("Location: indexLogin.php");
            exit;
        } else {
            $_SESSION['notification'] = 'Erro ao registar. Tente um novo username.';
            header("Location: indexRegister.php");
            exit;
        }
    }
    ?>
</body>

</html>