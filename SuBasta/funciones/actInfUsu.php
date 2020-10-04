<?php 

include("conexionMysql.php");
session_start();

$correo=$_SESSION["usuario"];

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$telefono= $_POST['telefono'];


$consulta="SELECT id_usuario FROM us WHERE correo='$correo'";

	$result=mysqli_query($conexion, $consulta);

	while($row=$result->fetch_assoc()){

		$id=$row['id_usuario'];

	$query="UPDATE us SET nombre_u='$nombre', apellido_u='$rfc', telefono='$telefono' WHERE id_usuario='$id'";
}

$resultado = mysqli_query($conexion, $query);

if ( !$resultado) {
		echo '<script> alert("Error al actualizar");
		</script>';
	}else{

		header("Location:../pag/perfil.php");
	}

?>