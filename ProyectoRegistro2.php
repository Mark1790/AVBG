<!DOCTYPE HTML¡>
<html>
<head>
<Meta charset="UTF-8">
<Title>Captura</title>
</head>
<body>
  <?php
  
  
  $conexion = mysqli_connect("LocalHost","root","","avgb") or die ("Problemas de conexion");

$registros = mysqli_query($conexion, "select ID from registro where ID='$_REQUEST[num]'") or 
die ("Problemas en el select:". mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
  
$conexion = mysqli_connect ("Localhost","root","","avgb") or die ("Problemas con la conexion");

  mysqli_query($conexion,"Insert into necesidades (ID,Especialidad,
   Necesidad,Necesidad2) values
  ('$_REQUEST[num]','$_REQUEST[Especialidad]','$_REQUEST[Necesidad]','$_REQUEST[Neces]')")
   or die("Problemas". mysqli_error($conexion));
  
   
   header("location: Confirmacion.php");

?>
<?php
} else {
	header("location: Error2.php"); 
?>
<?php
   
}
   ?>
   
   </body>
   <?php
   ?>
</html>