<?php

$utilizador = $_SESSION['username']; 
$login = $_SESSION['loggedIn'];

// Verificamos se existe login, caso não exista fazemos o redirect do user para a pagina iniciaç
if(!$utilizador || !$login){
   // exit(header("Location: index.php"));
}