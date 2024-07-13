<?php

// Arreglo indexado

$paises = array("Costa Rica", "Guatemala", "Nicaragua");

$etiquetaEnter = "<br>";
echo $paises[0];

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
