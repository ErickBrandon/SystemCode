<?php //inicia o continua con la sesion, convierte la variable global $_SESSION en variable normal, manda a traer conexion de la bd
    include('../funciones/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../frac/generales.php'); ?>
    <link rel="stylesheet" href="../recur/css/perfil.css">
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
                <p><?php echo $mostrar['nombre_u']." ".$mostrar['apellido_u'];?></p>
                <h3>Correo:</h3>
                <div class="contacto"><?php echo $mostrar['correo'];?></div>
                <h3>Teléfono:</h3>
                <div class="contacto">2371058678</div>
            </div>
            <div class="info-c">
                <p>Información de envio</p>
                <div class="direccion">Calle: Baja california norte</div>
                <div class="cont-direccion">
                    <div class="direccion">Número exterior: 10000</div>
                    <div class="direccion CP">Código postal: 75680</div>
                </div>
                <div class="direccion">Colonia: Centro</div>
                <div class="direccion">Ciudad: Tlacotepec de Benito Júarez</div>
                <div class="direccion">Estado: Puebla</div>
                <a href="datos_usuario.php"><div class="btn-ei">Editar información</div></a>
            </div>
        </div>
    </section>

</body>
</html>