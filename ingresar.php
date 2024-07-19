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
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="ingresar.php">Inicio de Sesion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Iniciar sesion</h2>
             <form method="POST" action="procesar_ingresar.php">
                <label>Usuario</label>
                <input type="text" name="usuario">
                <br>
                <label>Clave</label>
                <input type="password" name="clave">
                <br>
                <button type="submit" id="boton_envio">Ingresar</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Biblioteca Aserrí. Todos los derechos reservados.</p>
    </footer>
</body>

</html>