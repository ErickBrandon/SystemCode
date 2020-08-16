<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('frac/generales.php'); ?>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="{% static 'css/slider.css' %}">
    <link rel="stylesheet" href="{% static 'css/cargador.css'%}">
    <link rel="stylesheet" href="{% static 'css/categorias.css'%}">

</head>
<body>
    <?php include('frac/header.php'); ?>
    <section id="contenido">
		<div class="invitacion">
			<div class="img-i"><img loading="lazy" src="recur/img/Logo2.png" alt=""></div>
			<p><strong>¿Qué es <span class="s-b">Su-Basta</span>?</strong><br>
			<span class="parrafo">Nuestra plataforma es la revolución de la venta y adquisición de articulos,
			combinando  la clásica modalidad de subasta y la nueva tendencia de comercio libre oline.</span></p>
			<div class="empezemos">¡Empecemos!<span class="fas fa-gavel"></span></div>
		</div>

		{% include "secciones/categorias.html" %}

		<div class="subastas">
			<div class="cont-sbt">
				<div>¿Cómo <span>Su-Bastar</span>?</div>
				<p>En Su-Basta contamos con dos modalidades de subasta
				 en las que puedes participar como comprador o vendedor.<br>
				¡Para poder participar solo tienes que registrarte!</p>
			</div>
			<div class="modalidad">
				<div class="tradicional">
					<div><strong>Subasta Tradicional</strong></div>
					<p>Es una venta organizada basada en el clasico juego de subasta.</p>
					<div class="btn-conocer">Conocer más...<span class="fas fa-arrow-circle-right"></span></div>
				</div>
				<div class="inversa">
					<div><strong>Subasta Inversa</strong></div>
					<p>Es una venta donde los clientes participan actualizando el precio del producto para 
						lograr sorpendentes descuentos</p>
					<div class="btn-conocer">Conocer más...<span class="fas fa-arrow-circle-right"></span></div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>