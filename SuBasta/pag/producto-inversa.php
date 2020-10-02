<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../frac/generales.php'); ?>
    <link rel="stylesheet" href="../recur/css/producto.css">
    <title>Document</title>
</head>
<body>
<?php //incluye el header repetitivo para heredar en las páginas
    include('../frac/header.php'); ?>
<div id="ruta">
    <div class="linea">Modalidad-subasta<span>></span>Categoria<span>></span>Marca<span>></span>Producto</div>
    <div class="nombre">Smart TV Samsung Series 7 UN50TU7000FXZX LED 4K 50"</div>
</div>
<section id=contenido>
  <div id="cont-producto">
      <div class=producto-p>
        <div class="img-p"><img src="../recur/img/Vocho.jpg" alt=""></div>
            <div class="info-p">
              <ul>
                <li class="p-i">Precio inicial:</li>
                <li class="precio">$ 10,000.00</li>
                <li class="info-c">Categoría:</li>
                <li class="info-c">Marca:</li>
                <li class="info-c">Modelo:</li>
                <li class="info-c">Condición:</li>
                <li class="info-c">Tamaño:</li>
              </ul>
              <div class="tradicional">
                <header>Nuevo precio<span class="fas fa-donate"></span></header>
                <p class="mejor-precio">$ ??????</p>
                <button class="dnp">Descubrir nuevo precio</button>
                <button class="cah">Comprar ahora</button>
              </div>
              <div class=info-pagos>
                <p></p>
                <i class="fab fa-cc-paypal"></i>
              </div>
            </div>
      </div>
  </div>
</section>
</body>
</html>