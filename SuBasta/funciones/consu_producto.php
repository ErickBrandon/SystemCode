<?php 
    $dat_p="SELECT * FROM producto WHERE Id='$IdProd'";
    $p=mysqli_query($conexion,$dat_p);
    $mostrar=mysqli_fetch_array($p);
    mysqli_free_result($p);

    $categoria = $mostrar['categoria'];
    $clave = $mostrar['clave'];

    if ($categoria == "Tecnología") {
    	$conCat = "SELECT * FROM tecnologia WHERE ClaveP='$clave'";
    	$resCat = mysqli_query($conexion, $conCat);
    	$mostrarTec = mysqli_fetch_array($resCat);
    	mysqli_free_result($resCat);
    }
    mysqli_close($conexion);
 ?>