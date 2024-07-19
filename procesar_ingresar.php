<?php 
include('db.php');
session_start();

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$sql = "SELECT * FROM usuarios where usuario = '$usuario'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if($usuario == $row["usuario"]){
            if(password_verify($clave, $row["clave"])){
                $_SESSION["usuario"] = $usuario;
                header("Location: index.php");
            } else {
                echo "Clave incorrecta";
            }
        }
       
    }
} else {
    echo "No hay registros!";
}
