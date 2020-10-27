<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('../frac/generales.php');
    include("../funciones/conexionMysql.php");
    $IdProd = $_GET["IdProd"];
    include("../funciones/consu_producto.php");
    ?>
    <link rel="stylesheet" href="../recur/css/producto.css">
    <title>Document</title>
</head>
<body>
<?php //incluye el header repetitivo para heredar en las páginas
    include('../frac/header.php'); ?>
<div id="ruta">
    <div class="linea">Modalidad-subasta<span>></span>Categoria<span>></span>Marca<span>></span>Producto</div>
    <div class="nombre"><?php echo $mostrarP['nombreP']?></div>
</div>
<section id=contenido>
  <div id="cont-producto">
      <div class=producto-p>
        <div class="img-p"><img src="../recur/img/Vocho.jpg" alt=""></div>
            <div class="info-p">
              <ul>
                <li class="p-i">Precio inicial:</li>
                <li class="precio">$ <?php echo $mostrarP['precio']?></li>
                <li class="info-c">Categoría: <?php echo $mostrarP['categoria']?></li>
                <li class="info-c">Marca: <?php echo $mostrarP['marca']?></li>
                <li class="info-c">Condición: <?php echo $mostrarP['condicion']?></li>

                <!--Ropa y accesorios-->
                <?php if ($categoria == "Ropa y calzado") {?>
                <li class="info-c">Para:</li><!--Tambien para accesorios y belleza-->
                <li class="info-c">Tipo:</li>
                <li class="info-c">Tallas:</li>
                <?php } ?>

                <!--Tambien para accesorios y belleza-->
                <?php if ($categoria == "Accesorios y belleza") {?>
                <li class="info-c">Para:</li>
                <?php } ?>

                <!--Tecnologia-->
                <?php if ($categoria == "Tecnología") { ?>
                <li class="info-c">Tamaño: <?php echo $mostrarTec['Tamaño']?></li>
                <li class="info-c">Modelo: <?php echo $mostrarTec['Modelo']?></li>
                <?php } ?>

                <!--otro-->
                <?php if ($categoria == "Otro") { ?>
                <li class="info-c">Otra categoria: </li>
                <li class="info-c">Tamaño:</li>
                <?php } ?>
              </ul>
              <div class="tradicional">
                <header>Nuevo precio<span class="fas fa-donate"></span></header>
                <p class="mejor-precio">$ ??????</p>
                <?php if(isset($_POST['nuePre'])) { ?>
                    <p class="mejor-precio">$ </p>
                <?php } ?>
                <form action="producto-inversa.php?IdProd=<?php echo $IdProd ?>" method="POST">
                <button class="dnp" type="submit" name="nuePre">Descubrir nuevo precio</button>
                <button class="cah">Comprar ahora</button>
                </form>
              </div>
              <div class=info-pagos>
                <p>Participa en la subasta mediante</p>
                <img src="../recur/img/paypal.png" alt="">
              </div>
            </div>
      </div>
  </div>
</section>
</body>
</html>