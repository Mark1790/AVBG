<?php
include "seguridad.php";
 ?>
<!DOCTYPE HTML¡>
<html>
<head>
<Meta charset="UTF-8">
<Title>Registro de usuario</title>
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
		background-color:black;
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
	td{
     color: white;
}	
</style>
<body align= "center">
  <h1>Registro de administradores</h1>
  <div style="text-align: center" class="contenedorregis">
  <br>
   <img src="imagenes/Usuarios.png" width="120" height="100"><br>
   </br>
   <table border=0 style="margin: 0 auto;" Style="color: white">
   <form enctype="multipart/form-data" action="Pagina2.php" method="POST">
   <td>
     Ingrese Nombre
	 </td>
	  <td align="center">
   <input type="text" required name="Nombre" pattern="[A-Za-z]+" title="Ingrese solo letras"><br>
   </td>
   </tr>
   <tr>
   <td>
     Ingrese Apellido Paterno
	 </td>
	  <td align="center">
   <input type="text" required name="ApellidoP" pattern="[A-Za-z]+" title="Ingrese solo letras"><br>
   </td>
   </tr>
   <tr>
   <td>
     Ingrese Apellido Materno
	 </td>
	  <td align="center">
   <input type="text" required name="ApellidoM" pattern="[A-Za-z]+" title="Ingrese solo letras"><br>
   </td>
   </tr>
   <tr>
    <td>
      Ingrese Correo
    </td>
     <td align="center">
     <input type="text" required name="Correo"><br>
    </td>
    </tr>
   <tr>
   <td>
     Ingrese contraseña
	 </td>
	  <td align="center">
      <input type="text" required name="Contra"><br>
   </td>
</tr>
<tr>
   <td>
     Ingrese imagen de perfil
	 </td>
	  <td align="center">
      <input type="file" id="imagen" required name="imagen" accept="image/*"><br>
   </td>
</tr>
    <tr>
      <td>
        Consulta nuestros <a href="Terminos.html" class="registro"> Terminos y condiciones</a>
      </td>
    </tr>
    <tr>

      <td>
      </td>
    </tr>

   </table>
   <br><input type="submit" value="Enviar"><br>
   <br>
    
   </form>
	  <button><a href="InicioAdmin.php">Regresar al Inicio</a></button>
   </div>
 
  </body>
</html>