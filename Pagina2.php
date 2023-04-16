<?php 

$server = "localhost";
$user = "root";
$pass = "";
$bd = "AVGB"; 

$Nombre = $_POST['Nombre']; 
$ApellidoMaterno = $_POST['ApellidoP']; 
$ApellidoPaterno = $_POST['ApellidoM']; 
$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contra'];  
$imagen = $_FILES["imagen"];

// Crear un nombre de archivo único
$nombre_archivo = $Correo . "_" . $imagen["name"];

// Mover la imagen al directorio de destino
if (move_uploaded_file($imagen["tmp_name"], "perfil/" . $nombre_archivo)) {
  echo "Imagen guardada exitosamente.";
} else {
  echo "Error al guardar la imagen.";
}

$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }

 $conexion = mysqli_connect("LocalHost","root","","avgb") or die ("Problemas de conexion");

 $registros = mysqli_query($conexion, "select Correo from usuarios where Correo='$_REQUEST[Correo]'") or 
 die ("Problemas en el select:". mysqli_error($conexion));
 
 if ($reg = mysqli_fetch_array($registros)) {
   header("location: Registrodoble.php"); 
 
 
 }
 else{
   $query = "insert into usuarios values('','".$Nombre."','".$ApellidoMaterno."','".$ApellidoPaterno."','".$Correo."','".$Contraseña."','".$nombre_archivo."')";
 
 }
if (mysqli_query($conex, $query)) {
 ?>
<!DOCTYPE HTML¡>
<html>
<head>
<Meta charset="UTF-8">
<Title>Confirmacion</title>
    <link rel="stylesheet" href="Css.css">
</head>
<body text="white">
<style>
	body{
		height:637px;
        background-image:url('Imagenes/inicio.jpg');
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
		color= #FFFFFF;
		
	}
	h1{
		color:white;
	}
	.contenedorlogin {
            width:400px;
            height:515px;
            top:20%;
            left:36%;
            right:50%;
            position:absolute;
            background-color:rgba(0,0,0,0.8);
            }
	td{
     color: rgb(0, 0, 0);
}
	
</style>
<div style="text-align: center" class="contenedorlogin">
<?php
$conexion = mysqli_connect("LocalHost","root","","AVGB") or die ("Problemas de conexion");

$registros = mysqli_query($conexion, "select Nombre,ApellidoMaterno,ApellidoPaterno,Correo,Contraseña from usuarios where Correo='$_REQUEST[Correo]'") or 
die ("Problemas en el select:". mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
	?>
    <p text="white"style="font-size:30px;font-weight:bold">
	<img src="imagenes/usuarios.png" width="120" height="100"><br><br>


	<?php
echo "Nombre: ".$reg['Nombre'] ."<br>";
echo "Apellido Paterno: ".$reg['ApellidoMaterno'] ."<br>";
echo "Apellido Materno: ".$reg['ApellidoPaterno'] ."<br>";
echo "Correo: ".$reg['Correo'] ."<br>";
echo "Contraseña: ".$reg['Contraseña'] ."<br>";

} else {
	
	?>
	<h2>No encontramos los datos que estabas buscando</h2>
	<img src="Nodate.png" width="200" height="200"><br>
	
	<?php
}
	mysqli_close($conexion);
	
	
?>
    
   </form>
	  <button><a href="Registroconfirm.php">Continuar</a></button>
   </div>
 
  </body>
</html>
<?php
}
else{
 echo "Error: ".mysqli_error($conex);
}

mysqli_close($conex);

 ?>

