<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header('Location:../pag/perfil.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../recur/css/nuevo_usuario.css">
    <script src="../recur/js/usuario_nuevo.js"></script>
    <title>Entrada a Su-basta</title>
</head>
<body>
<?php 
if (isset($_POST['registrar'])) {
    include('../funciones/agregar_usuario.php');
}
?>
    <section id="contenido">
    <div class="registro">
        <a href="../index.php"><div class="principal">
            <div class="logo">
                <img src="../recur/img/logo-1.png" alt="">
            </div>
            <div class="nombre">Su-<span>Basta</span></div>
        </div></a>
        <p>Registrate, abre tu cuenta con nosotros<br>
            Es gratis, fácil y rapido.
        </p>
        <form name="f-1" method="POST" action="usuario_nuevo.php" onsubmit="return n_u();">
            <div><input id="nombre" type="text" placeholder="Nombre" name="nombre" required=""></div>
            <div><input id="apellido" type="text" placeholder="Apellidos" name="apellido" required=""></div>
            <div><input id="correo" type="email" placeholder="Correo electronico" name="correo" required=""></div>
            <div><input id="password" type="password" placeholder="Contraseña" name="password" required=""></div>
            <div><input id="password_c" type="password" placeholder="Confirmar contraseña" name="password_c" required=""></div>

            <div class="btn-r"><input type="submit" name="registrar"></div><br>
        <a href="login.php">Ingresa a Su-Basta</a>

        </form>
    </div>
    
    </section>
</body>
</html>