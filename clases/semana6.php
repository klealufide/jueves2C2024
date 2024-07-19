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
// Arreglo indexado

$paises = array("Costa Rica", "Guatemala", "Nicaragua");

$etiquetaEnter = "<br>";
echo $paises[2];

echo $etiquetaEnter;

foreach ($paises as $pais) {
    echo $pais;
    echo $etiquetaEnter;
}

//arreglos asociativos

$alumno = array("nombre" => "Maria", "edad" => 22, "altura" => 1.60, "matriculado" => true);
$alumno2 = array("nombre" => "Jose", "edad" => 18, "altura" => 1.70, "matriculado" => false);
$alumno3 = array("nombre" => "Pablo", "edad" => 32, "altura" => 1.80, "matriculado" => true);

$alumnos = array($alumno, $alumno2, $alumno3);

print_r($alumnos);
echo $etiquetaEnter;

$alumnos_variante[] = $alumno;
$alumnos_variante[] = $alumno2;
$alumnos_variante[] = $alumno3;
print_r($alumnos_variante);
echo $etiquetaEnter;

$alumnos_varianteAsociativo["primero"] = $alumno;
$alumnos_varianteAsociativo["segundo"] = $alumno;
$alumnos_varianteAsociativo["tercero"] = $alumno;
echo $etiquetaEnter;
print_r($alumnos_varianteAsociativo);

/*
$archivo = fopen("miarchivo.txt","w");
fwrite($archivo,"Hola, este es mi primer archivo");
fclose($archivo);
*/

$archivo = fopen("miarchivo.txt", "r");
while (!feof($archivo)) {
    $linea = fgets($archivo);
    echo $linea;
}
fclose($archivo);

echo $etiquetaEnter;


session_start();

$_SESSION["username"] = "Karol";

echo $_SESSION["username"];

session_destroy();

try {
    $archivo = fopen("test.txt", "r");
    if (!$archivo) {
        throw new Exception("No se puede abrir el archivo.");
    }
    while (!feof($archivo)) {
        $linea = fgets($archivo);
        echo $linea;
    }
    fclose($archivo);
} catch (Exception $e) {
    echo "Se ha producido un error: " . $e->getMessage();
}

        ?>
    </main>
    <footer>
        <p>&copy; 2024 Biblioteca Aserrí. Todos los derechos reservados.</p>
    </footer>
</body>

</html>