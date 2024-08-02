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
            <form method="POST" action="procesar_contacto.php">
                <label>Nombre</label>
                <input type="text" name="nombre">
                <br>
                <label>Email</label>
                <input type="email" name="correo">
                <br>
                <label>Mensaje</label>
                <textarea name="mensaje"></textarea>
                <br>
                <button type="submit" id="boton_envio">Enviar</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Biblioteca Aserrí. Todos los derechos reservados.</p>
    </footer>
</body>

</html>