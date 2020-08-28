
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../recur/css/nuevo_usuario.css">
    <title>Entrada a Su-basta</title>
</head>
<body>
<?php 
if (isset($_POST['registrar'])) {

    include('../prog/agregar_usuario.php');
    if ($password == $password_c) {
        $query="INSERT INTO us(nombre_u, apellido_u, correo, contraseña, fecha_n) VALUES('$nombre','$apellido','$correo','$password','$date')";
        mysqli_query($conexion,$query);
     }else{
         echo "<script> alert('Las contraseñas no coinciden');
         document.getElementById('nombre').value =".$nombre.";
         function actualizar(){location.reload(true);}
         document.getElementById('nombre').value =".$nombre.";
         
         </script>";        
     }
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
        <form name="f-1" method="POST" action="usuario_nuevo.php">
            <div><input id="nombre" type="text" placeholder="Nombre" name="nombre" required=""></div>
            <div><input type="text" placeholder="Apellidos" name="apellido" required=""></div>
            <div><input type="text" placeholder="Correo electronico" name="correo" required=""></div>
            <div><input id="password" type="password" placeholder="Contraseña" name="password" required=""></div>
            <div><input id="password_c" type="password" placeholder="Confirmar contraseña" name="password_c" required=""></div>

            <br>
            <h4>Fecha de nacimiento</h4>
            <div><input type="date" name="nacimiento"></div>
            <div class="btn-r"><input type="submit" name="registrar"></div><br>
        <a href="login.html">Ingresa a Su-Basta</a>

        </form>
    </div>
    
    </section>
</body>
</html>