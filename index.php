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
            <img width="560" height="315" src="./images/imagen1.jpg" id="imagenPrincipal">
        </section>
        <section>
            <iframe width="560" height="315"
                src="https://www.youtube-nocookie.com/embed/8KUgENkEYvs?si=up74bs14Tm8rVie7"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
        <section>
            <h2>Bienvenidos a la Biblioteca Virtual de Aserri</h2>
            <p>Descubre nuestro enorme catalogo en linea disponibles para prestamo</p>
        </section>
        <section>
            <h2>Servicios</h2>
            <div class="service-container">
                <div class="service-box">
                    <img src="./images/servicio1.jpg" alt="Servicio 1">
                    <h3>Prestamo de Libros</h3>
                    <p>Accede a una amplia colección de libros disponibles para préstamo.</p>
                </div>
                <div class="service-box">
                    <img src="./images/servicio2.jpg" alt="Servicio 2">
                    <h3>Recursos Digitales</h3>
                    <p>Utiliza nuestros recursos digitales para tus necesidades educativas y de investigación.</p>
                </div>
                <div class="service-box">
                    <img src="./images/servicio3.jpg" alt="Servicio 3">
                    <h3>Eventos y Talleres</h3>
                    <p>Participa en eventos y talleres organizados por la biblioteca.</p>
                </div>
            </div>
        </section>
        <section>
            <h2>Contacto</h2>
            <p class="contact">Para mas informacion, puedes contactarnos a travez de nuestro formulario en linea</p>
            <form>
                <label>Nombre</label>
                <input type="text" id="nombre">
                <br>
                <label>Email</label>
                <input type="email" id="email">
                <br>
                <label>Mensaje</label>
                <textarea id="mensaje"></textarea>
                <br>
                <button type="button" id="boton_envio">Enviar</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Biblioteca Aserrí. Todos los derechos reservados.</p>
    </footer>
</body>

</html>