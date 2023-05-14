<!DOCTYPE HTML¡>
<?php
include "seguridad.php";
?>
<html>
<head>
<Meta charset="UTF-8">
<Title>Menu Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
	body{
		height:637px;
        background-image:url('imagenes/FondoAdmin.jpg');
        background-size:cover;
        backdrop-filter: blur(6px);
        background-repeat:no-repeat;
        background-position:center center;
		color:#ffffff;
}
	
    h2{
	color:white;
    background-color:black;
	}
	.contenedorlogin {
            width:400px;
            height:515px;
            top:17%;
            left:36%;
            right:50%;
            position:absolute;
            background-color:rgba(0,0,0,0.8);
            }
</style> 
<body align= "center">
  <h2>Bienvenido Administrador</h2> 
 
  <h2>¿En que te podemos ayudar?</h2>
   <div style="text-align: center" class="contenedorlogin">
            <br />
            <br />
            <center><img src="imagenes/logo.png" width="120" height="90"></center><br />
            <table align="center" border=0> 
  <tr>
   <td><center><img src="imagenes/registro.png" width="110" height="100"><br></td>
   <td><center><img src="imagenes/consulta.png" width="110" height="100"><br></td>
   <td><center><img src="imagenes/trabajos.png" width="110" height="100"><br></td>
   </tr>
   <td><center><button onclick=location.href='RegistroAdmin.php'>Registro de Administradores</button></center></td>
   <td><center><button onclick=location.href='AdminConsulta.php'>Consulta de Administradores</button></center></td>
   <td><center><button onclick=location.href='AdminConsultaTrabajo.php'>Consulta de trabajos</button></center></td>
  </tr>
  <tr>
   <td><br><center><img src="imagenes/usuarios.png" width="110" height="100"><br></td>
   <td><br><center><img src="imagenes/sesion.png" width="110" height="100"><br></td>
   <td><br><center><img src="imagenes/equis.png" width="110" height="100"><br></td>
   </tr>
   <tr>
   <td><center><button onclick=location.href='Eliminacion.php'>Eliminacion de Administradores</button></center></td>
   <td><center><button onclick=location.href='salir.php'>Cerrar sesion</button></center></td>
   <td><center><button onclick=location.href='#'>Eliminacion de trabajo</button></center></td>
   </tr>
   <br>
	</br>
	</table>
        </div>
   </body>
</html>