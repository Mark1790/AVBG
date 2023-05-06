<?php
    $conexion = mysqli_connect("localhost", "root", "", "avgb") or die ("Problemas con la conexion");  
    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
      }
include "seguridad.php";
 ?> 
<!DOCTYPE HTML¡>
<html>
<head>
<Center>
<style>
    td {
      color: black;
    }
  </style>
<Meta charset="UTF-8">
<Title>Eliminacion de Administradores</title>
<link rel="stylesheet" href="barra.css">
</head>
<style>
	body{
		height:637px;
        background-image:url('Imagenes/Registro.jpg');
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
		color:#ffffff;
		
	}
	h1{
		background-color:black ;
		color:white;
	}
	.contenedorregis {
            width:700px;
            height:475px;
            top:20%;
            left:25%;
            right:50%;
            position:absolute;
            background-color:rgba(119, 114, 114, 0.8);
            border-radius: 10%;
            }
            h2{
                color:black;
            }
</style>
<body align= "center">
<h1>Consulta de Administradores</h1>
  <div style="text-align: center" class="contenedorregis">
<?php
  $conexion = mysqli_connect("localhost", "root", "", "avgb") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select Correo from usuarios where Correo='$_REQUEST[Correo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($Reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from usuarios where Correo ='$_REQUEST[Correo]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    ?>
	<img src="imagenes/Palomita.png" width="120" height="100"><br>
    <h2>Usuario eliminado</h2>
	<?php
  } else {
    ?>
	<img src="imagenes/equis.png" width="120" height="100"><br>
    <h2>Usuario no encontrado</h2>
	<?php
  }
  mysqli_close($conexion);
?>
<br><br>
  <a href="Eliminacion.php"><input type="submit" value="Regresar"></a>
</div>
</body>