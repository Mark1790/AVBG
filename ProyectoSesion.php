<?php

$server = "localhost";
$usuario = "root";
$pass = "";
$bd = "avgb";
$conexion = new mysqli($server, $usuario, $pass, $bd);
 
  if($conexion->connect_errno){
    die("Conexion fallida" .$conexion->connect_errno);
  }  
  
?>
<!DOCTYPE HTML¡>
<html>
<head>
<Meta charset="UTF-8">
<Title>Inicio de sesion</title>
</head>
 <style>
body{
		background-image: url('Login.gif');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		color= #FFFFFF;
		
		
	} 
        .contenedorlogin {
            width:400px;
            height:515px;
            top:10%;
            left:36%;
            right:50%;
            position:absolute;
            background-color:rgba(0,0,0,0.8);
            }
	    td{
           color: white;
    </style>
<body>
<?php
if (isset($_GET["errorusuario"])){
?>
echo '<script>alert("El nombre de usuario o la contraseña son incorrectos. Intente de nuevo")</script>';
<?php	
}
else{
?>

<?php
}
?>
<div style="text-align: center" class="contenedorlogin">
   <form action="ProyectoInicio.php"method="post">
   <table align="center" border=0 style="margin: 0 auto;">
   <br>
   <tr>
   <td><center><img src="usuarios.png" width="110" height="100"><br></td>
   </tr>
   <tr>
   <td><center>
     Ingrese Usuario
	 </center></td>
	 </tr>
	 <tr>
	  <td align="center">
   <input type="text" required name="Usuario"><br>
   </td>
   </tr>
   <tr>
   <td><center>
     Ingrese su contraseña
	 </center></td>
	</tr>
	<tr>
	  <td align="center">
   <input type="Password" required name="Contraseña"><br>
   </td>
   </tr>
   </table>
   <br>
   <input type="submit" value="Iniciar sesion">
   <br>
   <br>
   <a style="color:#66ad5f;" rel="author" href="http://localhost:8080/dashboard/Proyecto/ProyectoIni.php">Crear una cuenta</a>
   </form>
		</form>
   <br><button onclick=location.href='Proyecto.php'><strong>Pagina Principal</strong></button><br>
   </div>
   </body>
</html>