<?php 
    $dat_p="SELECT * FROM producto WHERE Id='$IdProd'";
    $p=mysqli_query($conexion,$dat_p);
    $mostrarP=mysqli_fetch_array($p);
    mysqli_free_result($p);

    $categoria = $mostrarP['categoria'];
    $clave = $mostrarP['clave'];
    $precio = $mostrarP['nuePrecio'];

    if ($categoria == "Tecnología") {
    	$conCat = "SELECT * FROM tecnologia WHERE ClaveP='$clave'";
    	$resCat = mysqli_query($conexion, $conCat);
    	$mostrarTec = mysqli_fetch_array($resCat);
    	mysqli_free_result($resCat);
    }

    if(isset($_POST['nuePre'])) {
        session_start();
        $usuario=$_SESSION['usuario'];
        $dat_u="SELECT * FROM us WHERE correo='$usuario'";
        $u=mysqli_query($conexion,$dat_u);
        $mostrar=mysqli_fetch_array($u);
        mysqli_free_result($u);
        $monedas = $mostrar['monedas'];
        if ($monedas > 0 ){

            $IdUsu = $mostrar['id_usuario'];
            $Actmonedas = $monedas - 1;
            $queryUsu="UPDATE us SET monedas='$Actmonedas' WHERE id_usuario='$IdUsu'";
            $resultado = mysqli_query($conexion, $queryUsu);

            $nuePre = $precio - 4;
            $query="UPDATE producto SET nuePrecio='$nuePre' WHERE Id='$IdProd'";
            $resultado = mysqli_query($conexion, $query);
        }else{

        }
    	
    
}
    mysqli_close($conexion);
 ?>