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
    <header>
        <img src="imagenes/Logo.png" width="80" lang="500">
        <nav class="navigation">
            <a href="index.php">Inicio</a>
            <a href="#">Instituciones</a>
            <a href="trabajos.php">Programas</a>
            <a href="proyecto.php">Sobre Nosotros</a>
        </nav>
    </header>
  <div style="text-align: center" class="contenedorregis">
  <br>
   <img src="imagenes/Palomita.png" width="120" height="100"><br>
   </br>
   <table border=0 style="margin: 0 auto;" Style="color: white">
   <form action="">
    <tr>
      <td>
        <p>Se han capturado los datos correctamente, los datos ingresados
            han sido enviados al empleador, recuerde que estos datos pueden
            seran usados unicamente para el empleo que el solicitante has
            solicitado
        </p>
      </td>
       <td align="center">
      
      </td>
      </tr>
   </table>
   <br>
   <br>
    
   </form>
	  <button><a href="Registro.php">Regresar</a></button>
   </div>
 
  </body>
</html>