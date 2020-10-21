<?php 
    $dat_p="SELECT * FROM producto WHERE Id='$IdProd'";
    $p=mysqli_query($conexion,$dat_p);
    $mostrar=mysqli_fetch_array($p);
    mysqli_free_result($p);

    $categoria = $mostrar['categoria'];
    $clave = $mostrar['clave'];
    $precio = $mostrar['nuePrecio'];

    if ($categoria == "Tecnología") {
    	$conCat = "SELECT * FROM tecnologia WHERE ClaveP='$clave'";
    	$resCat = mysqli_query($conexion, $conCat);
    	$mostrarTec = mysqli_fetch_array($resCat);
    	mysqli_free_result($resCat);
    }

    if(isset($_POST['nuePre'])) {
    	$nuePre = $precio - 4;

		$query="UPDATE producto SET nuePre='$nuePre' WHERE Id='$IdProd'";
    
}
    mysqli_close($conexion);
 ?>