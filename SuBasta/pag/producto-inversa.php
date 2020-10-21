<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if(isset($_POST['nuePre'])) {
      
    }
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
    <div class="nombre"><?php echo $mostrar['nombreP']?></div>
</div>
<section id=contenido>
  <div id="cont-producto">
      <div class=producto-p>
        <div class="img-p"><img src="../recur/img/Vocho.jpg" alt=""></div>
            <div class="info-p">
              <ul>
                <li class="p-i">Precio inicial:</li>
                <li class="precio">$ <?php echo $mostrar['precio']?></li>
                <li class="info-c">Categoría: <?php echo $mostrar['categoria']?></li>
                <li class="info-c">Marca: <?php echo $mostrar['marca']?></li>
                <li class="info-c">Modelo: <?php echo $mostrarTec['Modelo']?></li>
                <li class="info-c">Condición: <?php echo $mostrar['condicion']?></li>
                <li class="info-c">Tamaño: <?php echo $mostrarTec['Tamaño']?></li>
                <!--Ropa y accesorios-->
                <li class="info-c">Para:</li><!--Tambien para accesorios y belleza-->
                <li class="info-c">Tipo:</li>
                <li class="info-c">Tallas:</li>
                <!--Tecnologia-->
                <li class="info-c">Tamaño:</li>
                <li class="info-c">modelo:</li>

                <!--otro-->
                <li class="info-c">Otri:ctegoria</li>
                <li class="info-c">Tamaño:</li>
              </ul>
              <div class="tradicional">
                <header>Nuevo precio<span class="fas fa-donate"></span></header>
                <p class="mejor-precio">$ ??????</p>
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