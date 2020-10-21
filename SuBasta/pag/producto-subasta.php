<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../frac/generales.php');
    $IdProd = $_GET["IdProd"];
    include("../funciones/conexionMysql.php");
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
                <li class="info-c">Modelo: <?php echo $mostrar['Modelo']?></li>
                <li class="info-c">Condición: <?php echo $mostrar['condicion']?></li>
                <li class="info-c">Tamaño: <?php echo $mostrar['Tamaño']?></li>
              </ul>
              <div class="tradicional">
                <header>Mejor oferta <span class="fas fa-gavel"></span></header>
                <p class="mejor-precio">$ 10,100.00</p>
                <form action="">
                  <span>$</span><input type="text" ><button type="submit">Mejorar Oferta</button>
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