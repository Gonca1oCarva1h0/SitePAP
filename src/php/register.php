<html>

<head>
    <title> Resgistar </title>
</head>

<body>
    <h2> Inserir Registos </h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $numero = isset($_POST['numero']) ? $_POST['numero'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        if (!$email || !$nome || !$numero || !$password) {
            echo 'Campos em falta. Volte atrás e tente de novo.';
            exit;
        }

        echo 'Dados recebidos: <br />';
        echo 'Email: ' . $email . '<br />';
        echo 'Nome: ' . $nome . '<br />';
        echo 'Numero: ' . $numero . '<br />';
        echo 'Password: ' . $password . '<br />';

        $conexao = mysqli_connect('localhost', 'root', '');

        if (!$conexao) {
            echo '<p> Erro: Falha na ligação.';
            exit;
        }

        mysqli_select_db($conexao, 'clienyesbd');
        $insere = "INSERT INTO clientes VALUES ('$email', '$nome', '$numero', '$password')";
        $result = mysqli_query($conexao, $insere);

        if ($result) {
            echo "<p> Dados inseridos.<br>";
        } else {
            echo "<p> Dados não inseridos.<br>";
        }
    }
    ?>
</body>

</html>