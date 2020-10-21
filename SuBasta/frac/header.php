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
					<span>Gracias por usar la plataforma</span><br><br>
					<?php 
                        if(isset($usuario)){
                            echo $mostrar['nombre_u'];
                        }else{
                            echo "Crea tu cuenta";
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