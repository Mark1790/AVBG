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
</style>
<body align= "center">
  <h1>Consulta de Administradores</h1>
  <div style="text-align: center" class="contenedorregis">
  <br>
   <img src="imagenes/Usuarios.png" width="120" height="100"><br>
   </br>
   <table border=0 style="margin: 0 auto;">
   <form action="ProyectoEliminado.php" method="POST">
    <h2>Ingrese un correo de usuario a eliminar<h2>
      <input type="email" name="Correo"></br>
      <input type="submit" value="Buscar"></br>
   </form>
</table>
<br>
<table border=1 style="margin:0 auto;">
   <tr>
      <td style="background-color: #FFFFFF">ID</td>
      <td style="background-color: #FFFFFF">Nombre</td>
      <td style="background-color: #FFFFFF">Apellido paterno</td>
      <td style="background-color: #FFFFFF">Apellido Materno</td>
      <td style="background-color: #FFFFFF">Correo</td>
   </tr>
   <?php
      $sql="select ID,Nombre,ApellidoMaterno,ApellidoPaterno,Correo from usuarios";
      $result=mysqli_query($conexion,$sql);
      while($mostrar=mysqli_fetch_array($result)){
   ?>
   <tr>
      <td style="background-color: #FFFFFF"><?php echo $mostrar['ID']?></td> 
      <td style="background-color: #FFFFFF"><?php echo $mostrar['Nombre']?></td>
      <td style="background-color: #FFFFFF"><?php echo $mostrar['ApellidoMaterno']?></td>
      <td style="background-color: #FFFFFF"><?php echo $mostrar['ApellidoPaterno']?></td>
      <td style="background-color: #FFFFFF"><?php echo $mostrar['Correo']?></td>
   </tr>
   <?php
      }
   ?>
</table>

</form>
<br>
	  <button><a href="InicioAdmin.php">Regresar al Inicio</a></button>
   </div>
 
  </body>
</html>