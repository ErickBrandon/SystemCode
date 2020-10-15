<?php
include("conexionMysql.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$password_c=$_POST['password_c'];

$query="SELECT correo FROM us WHERE correo='$correo'";
$validacion=mysqli_query($conexion,$query);
if (mysqli_num_rows($validacion)>0){
    echo "<script> alert('El correo ya ha sido registrado');</script>"; 
}else{
        $query="INSERT INTO us(nombre_u, apellido_u, correo, contraseña) VALUES('$nombre','$apellido','$correo','$password')";
        mysqli_query($conexion,$query);
        session_start();
        $_SESSION['usuario']=$correo;
        header("Location:../pag/perfil.php");      
    }
mysqli_close($conexion);
?>