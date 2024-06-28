<?php
$nombre = "Juan";
$mensaje = "Hola, soy " . $nombre;
$edad = 30;
$altura = 1.75;
$estudianteActivo = true;

$etiquetaEnter = "<br>";

echo $mensaje . $etiquetaEnter;
echo "Edad : " . $edad . $etiquetaEnter;
echo "Altura : " . $altura . $etiquetaEnter;
echo "Es estudiante : " . $estudianteActivo . $etiquetaEnter;


$variable = "Hola soy global". $etiquetaEnter;

function miFuncion()
{
    $variable = "Hola soy local <br>";
    echo $variable;
}

miFuncion();
echo $variable;


$hora = 14;

if ($hora < 12) {
    echo "Buenos dias" . $etiquetaEnter;
} elseif ($hora < 18) {
    echo "Buenas tardes" . $etiquetaEnter;
} else {
    echo "Buenas noches" . $etiquetaEnter;
}

$hora = 20;
switch ($hora) {
    case $hora < 12:
        echo "Buenos dias" . $etiquetaEnter;
        break;
    case $hora < 18:
        echo "Buenos dias" . $etiquetaEnter;
        break;
    default:
        echo "Buenas noches" . $etiquetaEnter;
}


$numero = 10;
$numero2 = "10";

if ($numero == $numero2) {
    echo "el numero1 es igual a numero2 por valor". $etiquetaEnter;
}

if ($numero === $numero2) {
    echo "el numero1 es igual a numero2 por valor y tipo". $etiquetaEnter;
}

if ($numero != $numero2) {
    echo "el numero1 es diferente a numero2 por valor". $etiquetaEnter;
}

if ($numero !== $numero2) {
    echo "el numero1 es diferente a numero2 por valor y tipo". $etiquetaEnter;
}

$edad = 20;

$mayorEdad = 21;

$esMiembro = false;

if($edad >= $mayorEdad){
    echo "Es mayor de edad". $etiquetaEnter;
} else {
    echo "es menor de edad". $etiquetaEnter;
}


if($edad >= 18 || $esMiembro){
    echo "Adulto.". $etiquetaEnter;
} elseif(!$esMiembro){
    echo "no es miembro es menor". $etiquetaEnter;
} else {
    echo "no es miembro". $etiquetaEnter;
}

if(!($edad > 18)){
    echo "entre";
}

$listaTareas = ["hacer la cama","hacer desayuno","sacar al perros"];

foreach($listaTareas as $tarea){
    echo $tarea. $etiquetaEnter;
}
$contador = 0;
while($contador < 5){
    echo $contador;
    $contador++;
}


do {
    echo $contador;
    $contador--;
}while($contador > 0);
echo  $etiquetaEnter;
$tabla = 7;
for($i = 0; $i <= 10; $i++){
    echo $tabla."*".$i."=".($i*$tabla). $etiquetaEnter;
}