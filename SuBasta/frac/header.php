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
			 	<a href="../pag/subasta.php?sub=Tradicional"><div class="segundo">Tienda</div></a>
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
					<span>¡Hola!</span><br><br>
					<?php 
                        if(isset($usuario)){
                            echo $mostrar['nombre_u'];
                        }else{
                            echo "Registrate en la plataforma";
                        }
                    ?>
				</div>
				<ul>
						<li><a href="../index.php">Inicio</a></li>
						<li><a href="../pag/subasta.php?sub=subastaTradicional">Tienda</a></li>
						<li><a href="../pag/subasta.php?sub=subastaTradicional">Subasta tradicional</a></li>
						<li><a href="../pag/subasta.php?sub=subastaInversa">Subasta inversa</a></li>
					<?php
						if(isset($usuario)){
							echo "<li id='movil'><a href='../pag/perfil.php'>Mis perfil</a></li>";
							echo "<li id='movil'><a href=''>Mis subastas</a></li>";
							echo "<li id='movil'><a href='../funciones/cerrarSesion.php'>Cerrar sesión</a></li>";
						}else{
							echo "<li id='movil'><a href='../form/usuario_nuevo.php'>Crea tu cuenta</a></li>";
							echo "<li id='movil'><a href='../form/login.php'>Ingresa</a></li>";
						}?>
				</ul>
			</nav>
	</div>
</header>