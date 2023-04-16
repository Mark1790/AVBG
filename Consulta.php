<!DOCTYPE HTML¡>
<html>
<head>
<Meta charset="UTF-8">
<Title>Consulta</title>
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

$registros = mysqli_query($conexion, "select Nombre,ApellidoMaterno,ApellidoPaterno,Correo from usuarios where Correo='$_REQUEST[Correo]'") or 
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

} else {
	
	?>
	<h2>No encontramos los datos que estabas buscando</h2>
	<img src="Nodate.png" width="200" height="200"><br>
	
	<?php
}
	mysqli_close($conexion);
	
	
?>
    
   </form>
	  <button><a href="InicioAdmin.php">Regresar</a></button>
   </div>
 
  </body>
</html>

