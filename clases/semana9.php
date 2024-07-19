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

//$usuario = "kataty";
//$clave = "root";

// Crear usuario
//$hash = password_hash($clave,PASSWORD_BCRYPT);

$sql = "INSERT INTO usuarios (usuario, clave,  email) VALUES ( '$usuario', '$hash', 't@l.com');";

if($conn->query($sql) === TRUE){
    echo "Registro agregado exitosamente!";
} else {
    echo "Error al agregar el registro!";
}


// Read -> Select
// login
$sql = "SELECT * FROM usuarios where usuario = '$usuario'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if($usuario == $row["usuario"]){
            /*  echo "usuario existe <br>";
            if(password_verify($clave, $row["clave"])){
            session_start();
            $_SESSION['roles'] = $row['rol'];
                echo "clave es correcta<br>";
            } else {
                echo "clave incorrecta";
            }
            */
            echo "ID:".$row["id"]." "."Usuario:".$row["usuario"]." Email:".$row["email"]."<br> ";
        }
       
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


// Hashing

$clave = "123456";

$hash = password_hash($clave,PASSWORD_BCRYPT);

// validar

password_verify($clave, $hash);