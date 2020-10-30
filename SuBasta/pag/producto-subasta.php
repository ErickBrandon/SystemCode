<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../frac/generales.php');
    $IdProd = $_GET["IdProd"];
    include("../funciones/conexionMysql.php");
    include("../funciones/consu_producto.php");
    include("../funciones/refrescarP.php");
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
                <li class="info-c">Para:</li>
                <li class="info-c">Tipo:</li>
                <li class="info-c">Tallas:</li>
                <?php } ?> 
                <!--Tambien para accesorios y belleza-->
                <?php if ($categoria == "Accesorios y belleza") {?>
                <li class="info-c">Para:</li>
                <?php } ?>              
                <!--Tecnologia-->
                <?php if ($categoria == "Tecnología") {?>
                <li class="info-c">Tamaño: <?php echo $mostrarTec['Tamaño']?></li>
                <li class="info-c">modelo: <?php echo $mostrarTec['Modelo']?></li>
                <?php } ?>
                <!--otro-->
                <?php if ($categoria == "Otro") {?>
                <li class="info-c">Otra categoria: </li>
                <li class="info-c">Tamaño: </li>
                <?php } ?>
              </ul>
              <div class="tradicional">
                <header>Mejor oferta <span class="fas fa-gavel"></span></header>
                <p id="recargaP" class="mejor-precio">$ 10,100.00</p>
                <form action="">
                  <span>$</span>
                  <select name="" id="">
                    <option value="">+1</option>
                    <option value="">+5</option>
                    <option value="">+10</option>
                    <option value="">+20</option>
                    <option value="">+30</option>
                    <option value="">+50</option>
                  </select>
                  <button type="submit">Mejorar Oferta</button>
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
<script type="text/javascript">
  $(document).ready(function(){
      setInterval(
                  function(){
                  $('#recargaP').load('refrescarP.php');
        },2000
      );
  }
  );
</script>