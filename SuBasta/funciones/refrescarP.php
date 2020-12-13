<?php 
	include("conexionMysql.php");
	session_start();
    $IdProd=$_SESSION['IdProd'];
    $dat_p="SELECT * FROM producto WHERE Id='$IdProd'";
    $p=mysqli_query($conexion,$dat_p);
    $mostrarP=mysqli_fetch_array($p);
    mysqli_free_result($p);
   $precio = $mostrarP['nuePrecio'];
   echo   "$".$precio;
?>