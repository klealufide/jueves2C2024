<?php 
/* get
echo "Formulario enviado con los datos<br>";
echo "Nombre: ".$_GET["nombre"]."<br>";
echo "Email: ".$_GET["correo"]."<br>";
echo "Mensaje: ".$_GET["mensaje"]."<br>";

*/

echo "Formulario enviado con los datos<br>";
echo "Nombre: ".$_POST["nombre"]."<br>";
echo "Email: ".$_POST["correo"]."<br>";
echo "Mensaje: ".$_POST["mensaje"]."<br>";


$archivo = fopen("contacto.txt","w");
fwrite($archivo,"Nombre: ".$_POST["nombre"]."\n");
fwrite($archivo, "Email: ".$_POST["correo"]."\n");
fwrite($archivo, "Mensaje: ".$_POST["mensaje"]."\n");
fclose($archivo);

session_start();

$_SESSION["nombre"] = $_POST["nombre"];

header("Location: agradecimiento.php");
