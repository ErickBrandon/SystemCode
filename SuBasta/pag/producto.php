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
                <li>Precio inicial:</li>
                <li class="precio">$ 10,000</li>
                <li>Categoría:</li>
                <li>Marca:</li>
                <li>Modelo:</li>
                <li>Condición:</li>
                <li>Tamaño:</li>
              </ul>
            </div>
        </div>
        <div class="tradcional">
          <header>Mejor oferta en <span>Su-</span><span class="color">Basta</span></header>
          <p class="mejor-precio">$ 10,100</p>
          <form action="">
            <span>$<input type="text" ></span><button type="submit">Mejorar Oferta</button>
          </form>
          <div class="descripcion">
            <p class="t-caracteristicas">Descripción</p>
            <p class="mas-caract">Inteligente y predictivo
            El sistema operativo avanzado Android 9.0 Pie aprende tus hábitos para adaptarse a tu rutina y
            lograr la máxima eficiencia de tu equipo. Tu dispositivo tendrá la autonomía necesaria para reducir el
            consumo energético ajustando el brillo automáticamente y gestionando la batería de manera inteligente
            para que puedas priorizar el uso de tus aplicaciones habituales. Mayor rendimiento
            Su memoria RAM de 4 GB te permitirá ejecutar varias aplicaciones al mismo tiempo, jugar y
            navegar con gran rapidez y sin inconvenientes.</p> 
          </div>
        </div>
  </div>
</section>
</body>
</html>