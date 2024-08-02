<?php
include("functions.php");
$menu = getMenu();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Biblioteca Aserri</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.7.1.js"></script>
    <script src="./js/scriptvjquery.js"></script>
</head>

<body>
    <header>
        <h1>Biblioteca Aserri</h1>
        <nav>
            <ul>
                <?php foreach ($menu as $item) { ?>
                    <li><a href="<?php echo $item["url"] ?>"><?php echo $item["name"] ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Servicios</h2>
            <div class="service-container">
                <div class="service-box">
                    <img src="./images/servicio1.jpg" alt="Servicio 1">
                    <h3>Prestamo de Libros</h3>
                    <button onclick="showInfo('prestamos')">Ver detalles</button>
                    <p id="prestamos" style="display: none;">Accede a una amplia colección de libros disponibles para préstamo.</p>
                </div>
                <div class="service-box">
                    <img src="./images/servicio2.jpg" alt="Servicio 2">
                    <h3>Recursos Digitales</h3>
                    <button onclick="showInfo('digital')">Ver detalles</button>
                    <p id="digital" style="display: none;">Utiliza nuestros recursos digitales para tus necesidades educativas y de investigación.</p>
                </div>
                <div class="service-box">
                    <img src="./images/servicio3.jpg" alt="Servicio 3">
                    <h3>Eventos y Talleres</h3>
                    <button onclick="showInfo('eventos')">Ver detalles</button>
                    <p id="eventos" style="display: none;">Participa en eventos y talleres organizados por la biblioteca.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Biblioteca Aserrí. Todos los derechos reservados.</p>
    </footer>
</body>

</html>