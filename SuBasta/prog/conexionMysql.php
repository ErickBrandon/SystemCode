<?php
    $bd_host="localhost";
    $bd_usuario="root";
    $bd_nombre="subasta";
    $bd_password="";

   $conexion= new mysqli($bd_host,$bd_usuario,$bd_password,$bd_nombre);
   if ($conexion->connect_errno) {
        echo "Falló la conexión ".$conexion->connect_errno; 
    }
    $conexion->set_charset("utf8"); 
?>