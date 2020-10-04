<?php 

include("conexionMysql.php");
session_start();

$correo=$_SESSION["usuario"];

$calle= $_POST['calle'];
$colonia= $_POST['colonia'];
$codigoPos= $_POST['codigoPos'];
$ciudad= $_POST['ciudad'];
$estado= $_POST['estado'];


$consulta="SELECT id_usuario FROM us WHERE correo='$correo'";

	$result=mysqli_query($conexion, $consulta);

	while($row=$result->fetch_assoc()){

		$id=$row['id_usuario'];

	$query="UPDATE us SET calle='$calle', colonia='$colonia', codigoPos='$codigoPos', ciudad='$ciudad', estado='$estado' WHERE id_usuario='$id'";
}

$resultado = mysqli_query($conexion, $query);

if ( !$resultado) {
		echo '<script> alert("Error al actualizar");
		</script>';
	}else{

		header("Location:../pag/perfil.php");
	}

?>