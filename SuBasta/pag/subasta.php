<!DOCTYPE html>
<?php
include("../funciones/conexionMysql.php");
?>
<html lang="en">
<head>
    <?php include('../frac/generales2.php'); ?>
    <link rel="stylesheet" href="../recur/css/subasta.css">

    <link rel="stylesheet" href="../recur/css/header.css">
    <link rel="stylesheet" href="../recur/css/categorias.css">

    <title>Document</title>
</head>
<body>
<?php include('../frac/header.php');?>
<section id="contenido">
<?php include('../frac/categorias.html');?>
    <section id="sb-cont">
<?php 
$sub = $_GET["sub"];
            
    if ($sub == "Tradicional") {
        $consultaTra = "SELECT * FROM producto WHERE TipoSubasta='$sub'";
        $Res = mysqli_query($conexion, $consultaTra);
        while($mostrar=mysqli_fetch_array($Res)){
            $idPro = $mostrar['IdProducto'];
        ?>
<a href=""><div class="carta">
                <div class="img">
                    <?php 
            $sqlFoto="SELECT Foto FROM fotos WHERE IdProducto='$idPro'";
            $resultFoto=mysqli_query($conexion, $sqlFoto);
            if ($mostrarFoto = mysqli_fetch_array($resultFoto)) {
        ?>
                    <img src="../funciones/<?php echo $mostrarFoto['Foto'] ?>" alt="">
            <?php 
            } 
            ?>
                </div>
                <h3><?php echo $mostrar['NombreP']?></h3>
                <h4>$ <?php echo $mostrar['Precio']?></h4>

</div></a>
<?php }
}
    ?>



<?php
            
    if ($sub == "Inversa") {
        $consultaInv = "SELECT * FROM producto WHERE TipoSubasta='$sub'";
        $ResInv = mysqli_query($conexion, $consultaInv);
        while($mostrarInv=mysqli_fetch_array($ResInv)){
        $idPro = $mostrarInv['IdProducto'];
        ?>
<a href=""><div class="carta">
                <div class="img">
                    <?php 
            $sqlFoto="SELECT Foto FROM fotos WHERE IdProducto='$idPro'";
            $resultFoto=mysqli_query($conexion, $sqlFoto);
            if ($mostrarFoto = mysqli_fetch_array($resultFoto)) {
        ?>
                    <img src="../funciones/<?php echo $mostrarFoto['Foto'] ?>" alt="">
            <?php 
            } 
            ?>
                </div>
                <h3><?php echo $mostrarInv['NombreP']?></h3>
                <h4>$ <?php echo $mostrarInv['Precio']?></h4>

</div></a>
<?php }
}
    ?>
            

        </section>
</section>
</body>
</html>