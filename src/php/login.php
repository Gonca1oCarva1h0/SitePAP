<html>

<head>
    <title> Procurar</title>
</head>

<body>
    <h2> Procurar utilizador e password </h2>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!$username || !$password) {
        echo 'Volte atrás e escreva o utilizador e password.';
        exit;
    }
    echo '<p>Username: ' . $username . '<p>';
    $ligax = mysqli_connect('localhost', 'root', '');
    if (!$ligax) {
        echo '<p> Falha na ligação.';
        exit;
    }
    mysqli_select_db($ligax, 'pap');
    $procura = "select * from users where username='" . $username . "' and password='" . $password . "'";
    $result = mysqli_query($ligax, $procura);
    $nregistos = mysqli_num_rows($result);
    echo 'Nº de registos encontrados: ' . $nregistos . '<br>';
    if ($nregistos == 1) {
        echo 'acesso concedido<br>';
        echo '<a href="http://www.google.pt"> Google </a> <br>';
    } else {
        echo 'acesso não concedido<br>';
        echo '<a href="login.html"> Voltar ao Login </a> <br>';
    }
    ?>

</body>

</html>