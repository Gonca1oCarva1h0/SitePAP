<!DOCTYPE html>
<html lang="en">

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
    <title>Novidades</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/scripts.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #black;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #black;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .image-container {
            background-color: #808080;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            /* Definindo a largura da imagem para ocupar 100% da largura do contêiner */
            height: 55%;
            /* A altura é definida automaticamente para manter a proporção da imagem */
            display: block;
        }


        .image-details {
            padding: 20px;
        }

        .image-details h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #black;
        }

        .image-details p {
            font-size: 16px;
            color: #black;
        }


        .form-group {
            margin-bottom: 20px;
            background-color: #808080;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        .text-input,
        .file-input,
        .text-area {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #fff;
        }

        .text-area {
            height: 100px;
        }

        .submit-button {

            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #808080;
        }

        .submit-button:hover {
            background-color: black;
        }

        .notification {
            color: #fff;
            background-color: #black;
            padding: 10px;
            border-radius: 4px;
            margin-top: 10px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Isso centralizará verticalmente o formulário na página inteira */
            font-weight: bold;
        }

        .upload-form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
            background-color: #808080;
            /* Margens automáticas para centralizar horizontalmente */
        }


        /* Estilos de formulário restantes como mencionado anteriormente */
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
    <header class="jumbotron">
    </header>
    <br>
    <br>
    <br>
    <a id="inicio"></a>

    <?php if ($tipo == "admin"): ?>
        <div class="form-container">
            <form action="update.php" method="post" enctype="multipart/form-data" class="upload-form">
                <div class="form-group">
                    <label for="file">Select Image File to Upload:</label>
                    <input type="file" id="file" name="file" class="file-input">
                </div>

                <div class="form-group">
                    <label for="titulo">Title:</label>
                    <input type="text" id="titulo" name="titulo" required class="text-input">
                </div>

                <div class="form-group">
                    <label for="texto">Text:</label>
                    <textarea id="texto" name="texto" required class="text-area"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" value="Upload" class="submit-button">
                </div>

                <?php if (isset($_SESSION['notification'])): ?>
                    <div class="notification">
                        <?php echo $_SESSION['notification']; ?>
                    </div>
                    <?php unset($_SESSION['notification']); // Clear the notification after displaying                                  ?>
                <?php endif; ?>


            </form>
        </div>
    <?php endif; ?>

    <div class="main-container">



        <?php
        // Create connection
        $db = new mysqli("localhost", "root", "", "pap");

        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $query = $db->query("SELECT * FROM `update` ORDER BY dataAtual DESC");

        if ($query) {
            if ($query->num_rows > 0) {
                while ($row = $query->fetch_assoc()) {
                    $imageURL = 'uploads/' . $row["imagem"];
                    $titulo = $row["titulo"];
                    $texto = $row["texto"];
                    $data = $row["dataAtual"];

                    echo '<div class="image-container">';
                    echo '<img src="' . $imageURL . '" class="content-image" />';
                    echo '<div class="image-details">';
                    echo '<h2>' . $titulo . '</h2>';
                    echo '<p>' . $texto . '</p>';
                    echo '<p>' . $data . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No image(s) found...</p>';
            }
        } else {
            echo "Error executing query: " . $db->error;
        }

        // Close connection
        $db->close();
        ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </main>

    <footer>
        <p>&copy; Made By Gonçalo Carvalho</p>
    </footer>
</body>

</html>