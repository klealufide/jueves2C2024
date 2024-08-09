<?php 
/* get
echo "Formulario enviado con los datos<br>";
echo "Nombre: ".$_GET["nombre"]."<br>";
echo "Email: ".$_GET["correo"]."<br>";
echo "Mensaje: ".$_GET["mensaje"]."<br>";

*/

if($_POST["nombre"] == "" || $_POST["correo"] == "" || $_POST["mensaje"] == ""){
    echo "99";
} else {
    $archivo = fopen("contacto.txt","w");
    fwrite($archivo,"Nombre: ".$_POST["nombre"]."\n");
    fwrite($archivo, "Email: ".$_POST["correo"]."\n");
    fwrite($archivo, "Mensaje: ".$_POST["mensaje"]."\n");
    fclose($archivo);
    echo '00';
}

/// editar, elimnar, agregar

