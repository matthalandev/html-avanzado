<?php
    $usuario = "jorge";
    $password = "jorge";
    $servidor = "localhost";
    $bbdd = "curso";

    $conexion = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar a la base de datos");

    $db = mysqli_select_db($conexion, $bbdd) or die("No se ha encontrado la base de datos");

    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $consulta) or die("No ha funcionado la consulta");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RWD</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/Main.js"></script>
</head>
<body>
<header>
    <h1>PHP</h1>
    <h2>Creación dinámica de HTML</h2>
</header>
<aside>

</aside>
<main>
    <article>
        <?php
            echo "<h1>Hola Mundo</h1>";
        ?>
    </article>
    <article>
        <u>
            <?php
                while($columna = mysqli_fetch_array($resultado)){
                    echo "<li>";
                    echo $columna["nombre"]." - ".$columna["edad"];
                    echo "</li>";
                }
            ?>
        </u>
    </article>
</main>

</body>
</html>
