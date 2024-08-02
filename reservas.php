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
            <h2>Reservas</h2>
            <form method="post" action="">
                <label>Nombre:</label>
                <input type="text" name="nombre" id="nombre">
                <span id="nombreError">El nombre es obligatorio.</span>
                <br>
                <label>Correo electrónico:</label>
                <input type="email" name="email"  id="email">
                <span id="emailError">El email es obligatorio.</span>
                <br>
                <label>Fecha:</label>
                <input type="date" id="fecha" name="fecha">
                <span id="fechaError">La fecha es obligatorio.</span>
                <br>
                <button type="button"  id="enviarReservas">Enviar</button>
                <button type="reset">Restablecer</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Biblioteca Aserrí. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
