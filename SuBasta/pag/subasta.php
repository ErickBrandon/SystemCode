<!DOCTYPE html>
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
            
            <div class="carta">
                <div class="img">
                    <img src="{{ producto.fotoProd.url }}" alt="">
                </div>
                <h3>{{producto.nombreP}}</h3>
                <h4>${{producto.precio}}</h4>

            </div>
        </section>
</section>
</body>
</html>