<!DOCTYPE HTML¡>
<html>
<head>
<Meta charset="UTF-8">
<Title>Consulta de Administradores</title>
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
  <h1>Consulta de Administradores</h1>
  <div style="text-align: center" class="contenedorregis">
  <br>
   <img src="imagenes/Usuarios.png" width="120" height="100"><br>
   </br>
   <table border=0 style="margin: 0 auto;" Style="color: white">
   <form action="Consulta.php"method="post">
    <tr>
      <td>
        Ingrese el correo de Administradores
      </td>
       <td align="center">
      <input type="text" required name="Correo"><br>
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