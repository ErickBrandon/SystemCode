<?php
include("conexionMysql.php");

session_start();
$correo=$_SESSION["usuario"];

$nombre=$_POST['nombre'];
$condicion=$_POST['condicion'];
$venta=$_POST['venta'];
$cant=$_POST['cant'];
$marca=$_POST['marca'];
$categoria=$_POST['categoria'];
$detalles=$_POST['detalles'];	
$genero=$_POST['genero'];



$clave = 0;

while($clave <= 100) {

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


    $query="INSERT INTO producto(nombreP,condicion,venta,cantidad,marca,clave,comentario,UsuarioId) VALUES('$nombre','$condicion','$venta','$cant','$marca','$clave','$detalles','$idU')";
    mysqli_query($conexion,$query);



if($categoria=="Accesorios"){

   $queryBel="INSERT INTO belleza(Genero,ClaveP) VALUES('$genero','$clave')";
    mysqli_query($conexion,$queryBel);
    header("Location:../pag/producto.php");

}

if($categoria=="Tecnología"){
	$genero=$_POST['genero'];
	$modelo=$_POST['modelo'];
	$tamaño=$_POST['tamaño'];

   $queryTec="INSERT INTO tecnologia(Tipo,Modelo,Tamaño,ClaveP) VALUES('$genero','$modelo','$tamaño','$clave')";
    mysqli_query($conexion,$queryTec);
    header("Location:../pag/producto.php");
}

if($categoria=="Ropa y Calzado"){
	$tipo=$_POST['tipo'];
	$talla=$_POST['talla'];

   $queryCal="INSERT INTO ropa(Genero,Tipo,Talla,ClaveP) VALUES('$genero','$tipo','$talla','$clave')";
    mysqli_query($conexion,$queryCal);
    header("Location:../pag/producto.php");
}

if($categoria=="Otro"){
	$modelo=$_POST['modelo'];
	$categorias=$_POST['categorias'];
	$tamaño=$_POST['tamaño'];

   $queryOtr="INSERT INTO otro(Modelo,Categoria,Tamaño,ClaveP) VALUES('$modelo','$categorias','$tamaño','$clave')";
    mysqli_query($conexion,$queryOtr);
    header("Location:../pag/producto.php");
}

foreach ($_FILES['upload']['name'] as $key => $name){
	
		$consultapro="SELECT Id FROM producto WHERE clave='$clave'";
		$resultado=mysqli_query($conexion,$consultapro);
		if ($row = mysqli_fetch_array($resultado)) {
			$resId = $row["Id"];
		}
 
		$newFilename = time() . "_" . $name;
		move_uploaded_file($_FILES['upload']['tmp_name'][$key], 'productos/' . $newFilename);
		$ruta = 'productos/' . $newFilename;
	
	$queryFoto="INSERT INTO fotos(Foto,IdProducto) VALUES ('$ruta', '$resId')";

	mysqli_query($conexion, $queryFoto);
	mysqli_close($conexion);

}


?>