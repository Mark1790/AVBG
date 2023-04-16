<!DOCTYPE HTML¡>
<html>
<head>
<Meta charset="UTF-8">
<Title>Captura</title>
</head>
<body>
  <?php
  
  
  $conexion = mysqli_connect("LocalHost","root","","avgb") or die ("Problemas de conexion");

$registros = mysqli_query($conexion, "select Id,Nombre,ApellidoP,ApellidoM,Nacionalidad,Sexo from registro where ID='$_REQUEST[ID]'") or 
die ("Problemas en el select:". mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
  header("location: Error.php"); 
?>
<?php
} else {
	$conexion = mysqli_connect ("Localhost","root","","avgb") or die ("Problemas con la conexion");

  mysqli_query($conexion,"Insert into registro (ID,Nombre,
   ApellidoP,ApellidoM,Nacionalidad,Sexo) values
  ('$_REQUEST[ID]','$_REQUEST[Nombre]','$_REQUEST[ApellidoP]','$_REQUEST[ApellidoM]','$_REQUEST[Nacionalidad]','$_REQUEST[Sexo]')")
   or die("Problemas". mysqli_error($conexion));
  
   
   header("location: Registro2.php");
?>
<?php
   
}
   ?>
   
   </body>
   <?php
   ?>
</html>