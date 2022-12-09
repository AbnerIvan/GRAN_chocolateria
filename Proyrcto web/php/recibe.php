<?php
$con = mysqli_connect('localhost','root','','form-choco') or die ('error en la coneccion con el servidor local');
$sql = "INSERT INTO form
VALUES (null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["com-prod"]."','".$_POST["com-prec"]."','".$_POST["punt"]."')";
$resultado = mysqli_query ($con,$sql) or die ('error en el query database');
mysqli_close($con);
echo 'El nombre ingresado es:' .$_POST["nombre"].''.$_POST["apellido"].'<br>';
echo 'El comentario del producto se guardo exitosamente'.'<br>';
echo 'El comentario del precio se guardo exitosamente'.'<br>';
echo 'La puntuacion es de:' .$_POST["punt"].'<br>';
?>