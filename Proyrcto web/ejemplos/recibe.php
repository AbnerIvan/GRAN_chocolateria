<?php
$con = mysqli_connect('localhost','root','','clientes') or die ('error en la coneccion con el servidor local');
$sql = "INSERT INTO registro
VALUES (null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["email"]."','".$_POST["pass"]."','".$_POST["sexo"]."')";
$resultado = mysqli_query ($con,$sql) or die ('error en el query database');
mysqli_close($con);
echo 'El nombre ingresado es:' .$__POST["nombre"].''.$_POST["apellido"].'<br>';
echo 'El correo es:' .$__POST["email"].'<br>';
echo 'El sexo es:' .$__POST["sexo"].'<br>';
?>