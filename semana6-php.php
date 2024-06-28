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

// Ejercicios
// 1. Promedio de edad: Promedio para 5 edades
$edad1 = 20;
$edad2 = 25;
$edad3 = 30;
$edad4 = 22;
$edad5 = 28;

$promedio = ($edad1 + $edad2 + $edad3 + $edad4 + $edad5) / 5;

echo "El promedio de las edades es: " . $promedio. $etiquetaEnter;

// 2. Nombre completo usando dos variables: nombre y apellido:

$nombre = "Juan";
$apellido = "Pérez";

$nombre_completo = $nombre . " " . $apellido;

echo "El nombre completo es: " . $nombre_completo. $etiquetaEnter;

// 3.  Descuento de compras

$compra_total = 100000; 
$descuento = 0.15; 

$monto_descuento = $compra_total * $descuento;
$monto_total_con_descuento = $compra_total - $monto_descuento;

echo "El monto total con el descuento aplicado es: " . $monto_total_con_descuento. $etiquetaEnter;


// 4. Verificación de contraseña: máximo 8 dígitos, mínimo 5:


function verificar_clave($clave) {
    $longitud = strlen($clave);
    if ($longitud >= 5 && $longitud <= 8) {
        return "Contraseña válida.";
    } else {
        return "Contraseña inválida. Debe tener entre 5 y 8 caracteres. <br>";
    }
}

$clave = "abc123";
echo verificar_clave($clave);

// 5. Resultado del examen: Mostrar si un examen pasó o no

function resultado_examen($nota) {
    if ($nota >= 70) {
        return "El examen está aprobado.<br>";
    } else {
        return "El examen está reprobado.<br>";
    }
}

$nota = 85;
echo resultado_examen($nota);



function es_mayor_de_edad($edad) {
    if ($edad >= 18) {
        return "La persona es mayor de edad.<br>";
    } else {
        return "La persona es menor de edad.<br>";
    }
}

$edad = 20;
echo es_mayor_de_edad($edad);

function clasificar_numero($numero) {
    if ($numero > 0) {
        return "El número es positivo.<br>";
    } elseif ($numero < 0) {
        return "El número es negativo.<br>";
    } else {
        return "El número es cero.<br>";
    }
}

$numero = -10;
echo clasificar_numero($numero);


$tabla = 6;
for($i = 0; $i <= 10; $i++){
    echo $tabla."*".$i."=".($i*$tabla). $etiquetaEnter;
}

$contador_impares = 0;
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        $contador_impares++;
    }
}
echo "Hay ".$contador_impares." números impares del 1 al 20.";

$suma_pares = 0;
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        $suma_pares += $i;
    }
}
echo "La suma de todos los números pares del 1 al 20 es: $suma_pares.";


function calculadora($a, $b, $operador) {

    switch($operador){
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if($b != 0){
                return $a / $b;
            } else {
                return "No se puede dividir por cero";
            }
    }
}

$a = 10;
$b = 2;

echo "Suma: $a + $b = ".calculadora($a, $b,'+')."<br>";
echo "Resta: $a - $b = ".calculadora($a, $b,'-')."<br>";
echo "Multiplicación: $a * $b = ".calculadora($a, $b,'*')."<br>";
echo "División: $a / $b = ".calculadora($a, $b,'/')."<br>";