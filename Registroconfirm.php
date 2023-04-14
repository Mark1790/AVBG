<?php
include "seguridad.php";
 ?>
<!DOCTYPE HTML¡>
<html>
<head>
<Meta charset="UTF-8">
<Title>Confirmacion</title>
    <link rel="stylesheet" href="Css.css">
</head>
<style>
	body{
		height:637px;
        background-image:url('Imagenes/inicio.jpg');
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
		color:#000000;
		
	}
	h1{
		background-color:write;
	}
	.contenedorregis {
            width:460px;
            height:300px;
            top:30%;
            left:33%;
            right:50%;
            position:absolute;
            background-color:rgba(255, 255, 255, 1);
            border-radius: 10%;
            }
	td{
     color: rgb(0, 0, 0);
}
	
</style>
<body align= "center">
  <div style="text-align: center" class="contenedorregis">
  <br>
   <img src="imagenes/Palomita.png" width="120" height="100"><br>
   </br>
   <table border=0 style="margin: 0 auto;" Style="color: white">
   <form action="">
    <tr>
      <td>
        <p>Se han capturado los datos correctamente, los datos ingresados
            han sido capturados, los administradores que ha registrado ya
            pueden ingresar al sistema para iniciar sus actividades
        </p>
      </td>
       <td align="center">
      
      </td>
      </tr>
   </table>
   <br>
   <br>
    
   </form>
	  <button><a href="RegistroAdmin.php">Regresar</a></button>
   </div>
 
  </body>
</html>