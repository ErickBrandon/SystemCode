<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header('Location:../pag/perfil.php');
}elseif (isset($_POST['iniciar'])) {
    include('../funciones/f_login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
    <link rel="stylesheet" href="../recur/css/login.css">
    <title>Document</title>
</head>
<body>
    <header></header>
    <a href="../index.php"><div id="logo">
        <img src="../recur/img/logo2.png" alt="">
    </div></a>
    <h1>Inicia sesión</h1>
    <div id="login">
        
        <form method="POST"  action="login.php">
            <div class="titulo"><strong>Email</strong></div>
            <div class="txt"><input required type="text" name="correo"></div>
            <div class="titulo"><strong>Contraseña</strong></div>
            <div class="txt"><input required type="password" name="password"></div>
            <div  class="btn"><input type="submit" name="iniciar"></div>
        </form>
    </div>
    <div id="login" class="nuevo">
        ¿No tienes cuenta en <span>Su-Basta</span>?<br>
        <a href="usuario_nuevo.php">Crea una cuenta nueva</a>
    </div>
</body>
</html>