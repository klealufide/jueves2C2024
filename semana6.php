<?php 
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Biblioteca Aserri</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <h1>Biblioteca Aserri</h1>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#">Catalogo</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Prestamo</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Inicio de Sesion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            echo "<h4>Biblioteca Aserri</h4>";

            $nombre = "Karol4444";

            $edad = 34;

            $esEstudiante = false;


            echo $nombre."<br>";
            echo "<h1>".$_SESSION["username"]."</h1>";
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Biblioteca Aserrí. Todos los derechos reservados.</p>
    </footer>
</body>

</html>