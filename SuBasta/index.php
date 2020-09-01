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
		<img loading="lazy" src="recur/img/logo.png" alt="">
    </div>
    <div class="header-info">
			<div class="buscador-h">
				<form action="">
					<div class="txt"><input type="text" placeholder="Buscar productos"></div>
					<div class="btn fas fa-search"><input class="" type="submit" value=""></div>
				</form>
            </div>
			<div class="h-subastas">
				<a href=""><div class="segundo">Subasta tradicional</div></a>
				<a href=""><div class="segundo">Subasta inversa</div></a>
				<?php 
					if(!isset($usuario)){
						echo"<a href='form/usuario_nuevo.php'><div class='primero'>Crea tu cuenta</div></a>";
						echo"<a href='form/login.php'><div class='primero'>Ingresar</div></a>";
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
                    <span>¡Hola!</span><br><br>
					Gracias por usar la plataforma
				</div>
				<ul>
						<li><a href="">Subasta tradicional</a></li>
						<li><a href="">Subasta inversa</a></li>
					<?php
						if(isset($usuario)){
							echo "<li id='movil'><a href='pag/perfil.php'>Mis perfil</a></li>";
							echo "<li id='movil'><a href='#'>Mis subastas</a></li>";
							echo "<li id='movil'><a href='funciones/cerrarSesion.php'>Cerrar sesión</a></li>";
						}else{
							echo "<li id='movil'><a href='form/usuario_nuevo.php'>Crea tu cuenta</a></li>";
							echo "<li id='movil'><a href='form/login.php'>Ingresa</a></li>";
						}?>
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
				<span class="fa fa-chevron-left"></span>
			</div>
	
			<div class="right">
				<span class="fa fa-chevron-right"></span>
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
        <div class="titulo">Autos</div>
        <div class="img fas fa-car"></div>
        <div class="ir">
            <div>
                Subasta tradicional
            </div>
            <div>
                Subasta inversa
            </div>
        </div>
    </div>
    <div class="autos">
        <div class="titulo">Cómputo</div>
        <div class="img fas fa-laptop"></div>
        <div class="ir">
            <div>
                Subasta tradicional
            </div>
            <div>
                Subasta inversa
            </div>
        </div>
    </div>
    <div class="autos">
        <div class="titulo">Telefonía</div>
        <div class="img fas fa-mobile-alt"></div>
        <div class="ir">
            <div>
                Subasta tradicional
            </div>
            <div>
                Subasta inversa
            </div>
        </div>
    </div>
    <div class="autos">
        <div class="titulo">Hogar</div>
        <div class="img fas fa-home"></div>
        <div class="ir">
            <div>
                Subasta tradicional
            </div>
            <div>
                Subasta inversa
            </div>
        </div>
    </div>
    <div class="autos">
        <div class="titulo">Otros</div>
        <div class="img fas fa-tag"></div>
        <div class="ir">
            <div>
                Subasta tradicional
            </div>
            <div>
                Subasta inversa
            </div>
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