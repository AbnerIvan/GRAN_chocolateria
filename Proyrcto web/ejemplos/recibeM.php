<?php
$con = mysqli_connect('localhost', 'root', '', 'ClientesM') or die ('ERROR EN LA CONEXION CON EL SERVIDOR LOCAL');
/*Clientes:Nombre de la base de datos*/

$sql= "INSERT INTO registro /*registro:Nombre de la tabla*/
 VALUES(null,'".$_POST["nombre"]."', '".$_POST["apellido"]."', '".$_POST["email"]."', '".$_POST["pass"]."',
 '".$_POST["sexo"]."')";

 $resultado=mysqli_query ($con, $sql)or die ('ERROR EN EL QUERY DATABASE');

 mysqli_close($con);

 echo'EL NOMBRE ES '.$_POST["nombre"].''.$_POST["apellido"].'<br>';
 echo 'EL CORREO ES '.$_POST["email"].' <br>';
 echo 'EL SEXO ES '.$_POST["sexo"].' <br>';
?>