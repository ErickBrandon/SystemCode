<?php
include('conexionMysql.php');
$correo=$_POST['correo'];
$password=$_POST['password'];

$query="SELECT * FROM us WHERE correo='$correo' AND contraseña='$password'";
$validacion=mysqli_query($conexion,$query);
$existe=mysqli_num_rows($validacion);
if ($existe >0) {
    session_start();
    $_SESSION['usuario']=$correo;
    header("Location:../pag/perfil.php");
}else{
    echo "<script>
            alert('Los datos son incorrectos');
          </script>";
}
mysqli_free_result($validacion);
mysqli_close($conexion);
?>