<?php
include('conexionMysql.php');
$filtro=str_replace("=","subasta",$_POST['correo']);
$correo=mysqli_real_escape_string($conexion,$filtro);

$filtro=str_replace("=","e7.t4dd",$_POST['password']);
$password=mysqli_real_escape_string($conexion,$filtro);

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
echo $correo;
unset($filtro);
unset($correo);
unset($password);
unset($_POST['correo']);
unset($_POST['password']);



mysqli_free_result($validacion);
mysqli_close($conexion);
?>