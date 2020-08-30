<?php //inicia o continua con la sesion, convierte la variable global $_SESSION en variable normal, manda a traer conexion de la bd
    include('../funciones/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../frac/generales2.php'); ?>
    <link rel="stylesheet" href="../recur/css/perfil.css">
    <link rel="stylesheet" href="../recur/css/modal.css">
    <title>Document</title>
</head>
<body>
    
    <?php //hace la cosnulta de la informacón de l usuario
    include('../funciones/consu_usuario.php');?>
    <?php //incluye el header repetitivo para heredar en las páginas
    include('../frac/header.php'); ?>
    <section id="contenido">
        <div id="usuario">
            <div class="info-usuario">
                <div class="f-perfil">
                <img src="../recur/img/erick.png" alt="">
                </div>
                <p class="n-usuario"><?php echo $mostrar['nombre_u']." ".$mostrar['apellido_u'];?></p>
                <div class="info-envio">
                    <p>Correo</p>
                    <p class="txt-i"><?php echo $mostrar['correo'];?></p>
                    <p >Teléfono</p>
                    <p class="txt-i">2371058678</p>
                </div>
                <div class="btn-editar">Cambiar Información</div>
            </div> 
            <div class="info">
                <div class="su-coins">
                        <header>Información de envio</header>
                        <div>Calle y número</div>
                        <div>Colonia</div>
                        <div>Código postal:</div>
                        <div>Ciudad:</div>
                        <div>Estado:</div>
                </div>
                <div class="su-coins">
                        <header>Su-Coins</header>
                        <p>$100</p>
                        <div class="mas-coins">Ir por más <span  class="fas fa-search-dollar"></span> </div>
                </div>
                <div class="su-coins">
                        <a href=""><header>Mis subastas</header></a>
                        <a href=""><div class="mas-coins">Nueva Subasta  <span  class="fas fa-plus-circle"></span></div></a>
                </div>
            </div>           
        </div>
    </section>
</body>
</html>