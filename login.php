<?php
session_start(); // Inicie a sessão

$registrado = 0;
$username = $_POST['username'];
$password = $_POST['password'];

if (!$username || !$password) {
    echo 'Volte atrás e escreva o utilizador e password.';
    exit;
}

$ligax = mysqli_connect('localhost', 'root', '');

if (!$ligax) {
    echo '<p> Falha na ligação.';
    exit;
}

mysqli_select_db($ligax, 'pap');
$procura = "select * from users where username='" . $username . "' and password='" . $password . "'";
$result = mysqli_query($ligax, $procura);
$nregistos = mysqli_num_rows($result);

if ($nregistos == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['registrado'] = 1;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $row['email']; // Assuming 'email' is the field name in your database
    $_SESSION['tipo'] = $row['tipo'];
    header('Location: index.php');
    exit;
} else {
    $_SESSION['registrado'] = 0;
    $_SESSION['notification'] = 'Login falhou. Verifique o utilizador e a password.';
    header('Location: indexLogin.php');
    exit;
}
