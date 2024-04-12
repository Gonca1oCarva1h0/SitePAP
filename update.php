<?php
session_start(); // Start the session

// Database connection
$conexao = mysqli_connect('localhost', 'root', '', 'pap');

// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

$statusMsg = '';

// File upload directory
$targetDir = "uploads/";

// Retrieve form data
$nomeAdmin = $_SESSION['username'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];


if (isset($_POST["submit"])) {
    if (!empty($_FILES["file"]["name"])) {
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
                $sql = "INSERT INTO `update` (nomeAdmin, imagem, titulo, texto, dataAtual) VALUES ('$nomeAdmin', '$fileName', '$titulo', '$texto', NOW())";
                if (mysqli_query($conexao, $sql)) {

                    $_SESSION['notification'] = "Ficheiro adicionado com sucesso";
                    header('Location: novidades.php');
                } else {
                    $_SESSION['notification'] = "Erro. Tente novamente.";
                    header('Location: novidades.php');
                }

            } else {
                $_SESSION['notification'] = "Ouve um erro a da upload.";
                header('Location: novidades.php');
            }
        } else {
            $_SESSION['notification'] = 'Apenas ficheiro com extensão JPG, JPEG, PNG, & GIF são permitidos.';
            header('Location: novidades.php');
        }
    } else {
        $_SESSION['notification'] = 'Seleciona um ficheiro.';
        header('Location: novidades.php');
    }
}

// Display status message


// Close database connection
mysqli_close($conexao);
