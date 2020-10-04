<?php
include('conexionMysql.php');
session_start();
$correo=$_SESSION["usuario"];
$password=$_POST['password'];
$password2=$_POST['password2'];
$password3=$_POST['password3'];

$query="SELECT * FROM us WHERE correo='$correo' AND contraseña='$password'";
$validacion=mysqli_query($conexion,$query);
$existe=mysqli_num_rows($validacion);
if ($existe >0) {

	if ($password2 == $password3) {
		$consulta="SELECT id_usuario FROM us WHERE correo='$correo'";

		$result=mysqli_query($conexion, $consulta);

		while($row=$result->fetch_assoc()){

			$id=$row['id_usuario'];

			$queryUpd="UPDATE us SET contraseña='$password2' WHERE id_usuario='$id'";
		}

		$resultado = mysqli_query($conexion, $queryUpd);

		if ( !$resultado) {
			echo '<script> alert("Error al actualizar");
			</script>';
		}else{

			header("Location:../pag/perfil.php");
		}
	}else{
		echo "<script>
            alert('Contraseñas nuevas no coinciden');
          </script>";
	}
    
}else{
    echo "<script>
            alert('Contraseña incorrecta');
          </script>";
          
}
mysqli_close($conexion);
?>