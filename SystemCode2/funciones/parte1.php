<?php 
$modalidad=$_POST['modalidad'];
$categoria=$_POST['categoria'];
$nombre_p=$_POST['nombre-p'];
$marca=$_POST['marca'];
$condicion=$_POST['condicion'];

if($_POST['categoria']=="Ropa y Calzado"){
    header("Location:../detalles_del_producto.php?categoria=".$_POST['categoria']);
}elseif($_POST['categoria']=="Accesorios y Belleza"){
    header("Location:../detalles_del_producto.php?categoria=".$_POST['categoria']);

}elseif($_POST['categoria']=="Tecnología"){
    header("Location:../detalles_del_producto.php?categoria=".$_POST['categoria']);

}elseif($_POST['categoria']=="Otro"){
    header("Location:../detalles_del_producto.php?categoria=".$_POST['categoria']);

}
?>