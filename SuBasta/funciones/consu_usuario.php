<?php
    $dat_u="SELECT * FROM us WHERE correo='$usuario'";
    $u=mysqli_query($conexion,$dat_u);
    $mostrar=mysqli_fetch_array($u);

?>