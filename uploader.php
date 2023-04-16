<?php
$conexion = mysqli_connect("LocalHost","root","","avgb") or die ("Problemas de conexion");

$registros = mysqli_query($conexion, "select Nombre,ApellidoMaterno,ApellidoPaterno,Correo,Contraseña from usuarios where Correo='$_REQUEST[Correo]'") or 
die ("Problemas en el select:". mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
  header("location: Error.php"); 
?>
<?php
} else {
	$conexion = mysqli_connect ("Localhost","root","","avgb") or die ("Problemas con la conexion");

  mysqli_query($conexion,"Insert into usuarios (Nombre,
   ApellidoMaterno,ApellidoPaterno,Correo,Contraseña) values
  ('$_REQUEST[Nombre]','$_REQUEST[ApellidoP]','$_REQUEST[ApellidoM]','$_REQUEST[Correo]','$_REQUEST[Contra]')")
   or die("Problemas". mysqli_error($conexion));
  
   
   header("location: RegistroAdmin.php");
?>
<?php
   
}
