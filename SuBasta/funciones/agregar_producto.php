<?php
include("conexionMysql.php");

session_start();
$correo=$_SESSION["usuario"];

$nombre=$_POST['nombreP'];
$id=$_POST['id'];
$categoria=$_POST['categoria'];
$condicion=$_POST['condicion'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$tamaño=$_POST['tamaño'];
$comentarios=$_POST['comentarios'];
$precio=$_POST['precio'];
$tipo=$_POST['tipoSubasta'];
$clave = 0;

while($clave <= 10) {

	$consultaClave = "SELECT Clave FROM claves WHERE Clave = '$clave'";
	$resCoCla = mysqli_query($conexion, $consultaClave);
	$fila = mysqli_num_rows($resCoCla);
	if ($fila>0) {
		$clave++;
	}else{
		$queryClave = "INSERT INTO claves(Clave) VALUES('$clave')";
		mysqli_query($conexion,$queryClave);
		break;
	}

}




$consulta="SELECT id_usuario FROM us WHERE correo='$correo'";
		$resCon=mysqli_query($conexion, $consulta);
		$fila=mysqli_num_rows($resCon);
		if ($fila>0) {
		if ($row = mysqli_fetch_array($resCon)) {
			$idU= $row["id_usuario"];
		}
		}


    $query="INSERT INTO producto(NombreP,Categoria, Condicion, Marca,Modelo,Tamaño,Comentario,TipoSubasta,Precio, clave,UsuarioId) VALUES('$nombre','$categoria','$condicion','$marca','$modelo','$tamaño','$comentarios','$tipo','$precio', '$clave','$idU')";
    mysqli_query($conexion,$query);



foreach ($_FILES['upload']['name'] as $key => $name){

		
		$consultapro="SELECT IdProducto FROM producto WHERE clave='$clave'";
		$resultado=mysqli_query($conexion,$consultapro);
		if ($row = mysqli_fetch_array($resultado)) {
			$resId = $row["IdProducto"];
		}
 
		$newFilename = time() . "_" . $name;
		move_uploaded_file($_FILES['upload']['tmp_name'][$key], 'productos/' . $newFilename);
		$ruta = 'productos/' . $newFilename;
	
	$queryFoto="INSERT INTO fotos(Foto,IdProducto) VALUES ('$ruta', '$resId')";

	mysqli_query($conexion, $queryFoto);
	header("Location:../pag/perfil.php");

}
?>