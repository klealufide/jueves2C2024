<?php 
function getMenu(){
    session_start();
    $menu = array(array("url" => "index.php", "name" => "Inicio"), 
    array("url" => "about.php", "name" => "Nosotros"));
    $menu[] = array("url" => "servicios.php", "name" => "Servicios");
    $menu[] = array("url" => "reservas.php", "name" => "Reservas");
    $menu[] = array("url" => "contacto.php", "name" => "Contacto");
    if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] != "") {
        $menu[] = array("url" => "salir.php", "name" => "Salir");
    } else { 
        $menu[] = array("url" => "ingresar.php", "name" => "Inicio sesion");
     }
    return $menu;
}

