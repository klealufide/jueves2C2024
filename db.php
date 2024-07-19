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

