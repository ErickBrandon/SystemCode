<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('frac/generales.php'); ?>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="{% static 'css/slider.css' %}">
    <link rel="stylesheet" href="{% static 'css/cargador.css'%}">
    <link rel="stylesheet" href="recur/css/categorias.css">

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

			<div id="header-menu" class="menu">
				<div class="menu_bar">
					<a href="#" class="bt-menu"><span class="fas fa-bars"></span></a>
				</div>
		 
				<nav>
					<ul>
						<li id="movil"><a href="form/usuario_nuevo.html">Crea tu cuenta</a></li>
						<li id="movil"><a href="form/login.html">Ingresa</a></li>
						<li id="movil"><a href="#">Mis subastas</a></li>
	
						<li><a href="">Inicio</a></li>
						<li><a href="">Subasta tradicional</a></li>
						<li><a href="">Subasta inversa</a></li>
	
					</ul>
				</nav>
			</div>
		</div>
		<div class="sb-link"> 
			
			<a href=""><div class="link"><span class="fas fa-sign-in-alt"></span>Cerrar Sesión</div></a>
			<li id="movil"><a href="form/usuario_nuevo.html">Crea tu cuenta</a></li>
			<a href=""><div class="link"><span class=""></span>Mi perfil</div></a>
			<a href=""><div class="link">Mis subastas</div></a>
			<a href="form/usuario_nuevo.html"><div class="link">Crea tu cuenta</div></a>
			<a href="form/login.html"><div class="link"><span class="fas fa-sign-in-alt"></span>Ingresa</div></a>
			
		</div>
		
	</header>
    <section id="contenido">
        <div id="qsb">
            <div class="sb">
                <header>¿Qué es <span class="tipografia">Su-<span class="naranja">Basta</span></span>?</header>
                <p>Nuestra plataforma es la revolución de la venta 
                y adquisición de articulos, combinando la clásica modalidad de subasta 
                y la nueva tendencia de comercio libre oline.</p>
            </div>
            <div class="img-e"><img src="recur/img/empezar.jpg" alt=""></div>
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
    
    

</section>
</body>
</html>