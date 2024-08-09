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
    <script src="./js/script.js"></script>
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
            <h2>Contacto</h2>
            <p class="contact">Para mas informacion, puedes contactarnos a travez de nuestro formulario en linea</p>
            <form>
                <label>Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <br>
                <label>Email</label>
                <input type="email" name="correo" id="correo">
                <br>
                <label>Mensaje</label>
                <textarea name="mensaje" id="mensaje"></textarea>
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