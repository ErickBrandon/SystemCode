<?php 
session_start();
if(isset($_SESSION['usuario'])){
    $usuario=$_SESSION['usuario'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Link----------------------------------------- -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!-- Meta----------------------------------------- -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Css ----------------------------------------- -->
<link rel="stylesheet" href="recur/css/header.css">
<link rel="stylesheet" href="recur/css/header-menu.css">
<link rel="stylesheet" href="recur/css/generales.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="recur/css/slider.css">
<link rel="stylesheet" href="recur/css/cargador.css">
<link rel="stylesheet" href="recur/css/categorias.css">
<!-- Js ----------------------------------------- -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="recur/js/header-menu.js"></script>
<script src="recur/js/main.js"></script>

</head>
<body>
<header id="header">
    <div class="logo">
		<img loading="lazy" src="../recur/img/logo.png" alt="">
    </div>
    <div class="header-info">
			<div class="buscador-h">
				<form action="">
					<div class="txt"><input type="text" placeholder="Buscar productos"></div>
					<div class="btn fas fa-search"><input class="" type="submit" value=""></div>
				</form>
            </div>
			<div class="h-subastas">
			 	<a href="../pag/subasta.php?sub=Tienda"><div class="segundo">Tienda</div></a>
				<a href="../pag/subasta.php?sub=Tradicional"><div class="segundo">Subasta tradicional</div></a>
				<a href="../pag/subasta.php?sub=Inversa"><div class="segundo">Subasta inversa</div></a>
				<?php 
					if(!isset($usuario)){
						echo"<a href='../form/usuario_nuevo.php'><div class='primero'>Crea tu cuenta</div></a>";
						echo"<a href='../form/login.php'><div class='primero'>Ingresar</div></a>";
					}
				?>

				

			</div>
    </div>
    <div id="header-menu" class="menu">
			<div class="menu_bar">
				<?php
				if(isset($usuario)){
					echo "<a href='#' class='bt-menu'><span class='far fa-user-circle'></span></a>";
				}else{
					echo "<a href='#' class='bt-menu'><span class='fas fa-bars'></span></a>";
				}?>
			</div>		 
			<nav>
				<div class="saludo">
					<span>Gracias por usuar la plataforma</span><br><br>
					<?php 
                        if(isset($usuario)){
                            echo $mostrar['nombre_u'];
                        }else{
                            echo "Registrate en la plataforma";
                        }
					?>
				</div>
				<hr>
				<ul>
					<?php
						if(isset($usuario)){
							echo "<li id='movil'><a href='../pag/perfil.php'>Mis perfil</a></li>";
							echo "<li id='movil'><a href=''>Mis subastas</a></li>";
							echo "<li id='movil'><a href='../funciones/cerrarSesion.php'>Cerrar sesión</a></li>";
						}else{
							echo "<li id='movil'><a href='../form/usuario_nuevo.php'><span class='fas fa-user-plus icon-nav'></span>Crea tu cuenta</a></li>";
							echo "<li id='movil'><a href='../form/login.php'><span class='fas fa-sign-in-alt icon-nav'></span>Ingresa</a></li>";
						}?>
						<li><a href="../index.php"><span class="fas fa-home icon-nav"></span>Inicio</a></li>
						<br><br>
						<hr><br>
						<li><a href="../pag/subasta.php?sub=subastaTienda"><span class="fas fa-shopping-bag icon-nav"></span>Tienda</a></li>
						<li><a href="../pag/subasta.php?sub=subastaTradicional"><span class="fas fa-gavel icon-nav"></span>Subasta tradicional</a></li>
						<li><a href="../pag/subasta.php?sub=subastaInversa"><span class="fas fa-donate icon-nav"></span>Subasta inversa</a></li>
				</ul>
			</nav>
	</div>
</header>
    <div id="banner">
		<div class="slideshow">
			<ul class="slider">
				<li>
					<img  src="recur/img/bn1.png " alt="">
					
				</li>
				<li>
					<img  src="recur/img/bn2.png" alt="">
					
				</li>
				<li>
					<img  src="recur/img/bn3.png" alt="">
					
				</li>
				<li>
					<img  src="recur/img/bn4.png" alt="">
					
				</li>
			</ul>
	
			<ol class="pagination">
				
			</ol>
		
			<div class="left">
				<span id="btn-banner" class="fa fa-chevron-left"></span>
			</div>
	
			<div class="right">
				<span id="btn-banner" class="fa fa-chevron-right"></span>
			</div>
	
		</div>
	</div>
    <section id="contenido">
        <div id="qsb">
            <div class="sb">
                <header>¿Qué es <span class="tipografia">Su-<span class="naranja">Basta</span></span>?</header>
                <p>Nuestra plataforma es la revolución de la venta 
                y adquisición de articulos, combinando la clásica modalidad de subasta 
                y la nueva tendencia de comercio libre oline.</p>
            </div>
            <div class="img-e"><img src="recur/img/empezar.png" alt=""></div>
        </div>
        <p id="titulo-sb">Categorías</p>
<div class="categorias">
    <div class="autos">
        <div class="titulo">Ropa y Calzado</div>
        <div class="img fas fa-tshirt"></div>
        <div class="ir">
            <div>Tienda</div>
            <div>Subasta tradicional</div>
            <div>Subasta inversa</div>
        </div>
    </div>
    <div class="autos">
        <div class="titulo">Accesorios y Belleza</div>
        <div class="img fas fa-child"></div>
        <div class="ir">
            <div>Tienda</div>
            <div> Subasta tradicional</div>
            <div>Subasta inversa</div>
        </div>
    </div>
    <div class="autos">
        <div class="titulo">Telefonía</div>
        <div class="img fas fa-mobile"></div>
        <div class="ir">
            <div>Tienda</div>
            <div>Subasta tradicional</div>
            <div> Subasta inversa</div>
        </div>
    </div>
    <div class="autos">
        <div class="titulo">Otro</div>
        <div class="img fas fa-tag"></div>
        <div class="ir">
            <div>Tienda</div>
            <div>Subasta tradicional</div>
            <div>Subasta inversa</div>
        </div>
    </div>
</div>
    <p id="titulo-sb">Conócenos más</p>
    <div id="modalidad">
        <div class="mod-i mod">
            <header>¿Cómo Su-Bastar?</header><br>
        <p>En <span>Su-<span class="color">Basta</span></span> contamos<br>con dos modalidades de subasta en las que <br> puedes participar como comprador o vendedor.<br>
        <br><br></p>
        </div>
        <div class="mod">
            <div class="img-mod">
                <img loading="lazy" src="recur/img/tradicional.png" alt="">
                <header class="m-s">Subasta Tradicional</header>
                <p class="t-s">Es una venta organizada basada en el clasico juego de subasta.</p>
                <div class=saber-m><a href="">Saber más</a></div>
            </div>
        </div>
        <div class="mod">
            <div class="img-mod">
                <img loading="lazy" src="recur/img/inversa.png" alt="">
                <header class="m-s">Subasta Inversa</header>
                <p class="t-s">Los precios desminuyen con el uso de Su-Coins</p>
                <div class=saber-m><a href="">Saber más</a></div>
            </div>
        </div>
    </div>
</section>
</body>
</html>