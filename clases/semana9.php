<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "biblioteca";

$conn = new mysqli($servername,$username, $password, $database);

if($conn->connect_error){
    die("Conexion fallida: ".$conn->connect_error);
    
}

echo "Conexion exitosa";

// CREATE -> INSERT

$sql = "INSERT INTO usuarios (usuario, clave,  email) VALUES ( 'tatiana', '123456', 't@l.com');";

if($conn->query($sql) === TRUE){
    echo "Registro agregado exitosamente!";
} else {
    echo "Error al agregar el registro!";
}

// Read -> Select

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID:".$row["id"]." "."Usuario:".$row["usuario"]." Email:".$row["email"]."<br> ";
    }
} else {
    echo "No hay registros!";
}

// Update -> Update

$sql = "UPDATE usuarios SET usuario = 'KaroL' WHERE id = 1;";

if($conn->query($sql) === TRUE){
    echo "Registro actualizo exitosamente!";
}else {
    echo "Error al actualizar el registro!";
}

// Delete -> Delete


$sql = "DELETE FROM usuarios WHERE id=3;";

if($conn->query($sql) === TRUE){
    echo "Registro se borro exitosamente!";
}else {
    echo "Error al borrar el registro!";
}