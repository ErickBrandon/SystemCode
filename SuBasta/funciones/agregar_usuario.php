<?php
include("conexionMysql.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$password_c=$_POST['password_c'];
$date=$_POST['nacimiento'];

if ($password == $password_c) {
    $query="INSERT INTO us(nombre_u, apellido_u, correo, contraseña, fecha_n) VALUES('$nombre','$apellido','$correo','$password','$date')";
    mysqli_query($conexion,$query);
    session_start();
    $_SESSION['usuario']=$correo;
    header("Location:../pag/perfil.php");
}else{
    echo "<script> alert('Las contraseñas no coinciden');
          document.getElementById('nombre').value =".$nombre.";
          function actualizar(){location.reload(true);}         
         </script>";        
     }
mysqli_close($conexion);

?>