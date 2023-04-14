<!DOCTYPE HTML¡>
<html>
<head>
<Meta charset="UTF-8">
<Title>Registro de usuarios</title>
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
  <h1>Registro de usuarios</h1>
  <div style="text-align: center" class="contenedorregis">
  <br>
   <img src="imagenes/Usuarios.png" width="120" height="100"><br>
   </br>
   <table border=0 style="margin: 0 auto;" Style="color: white">
   <form action="ProyectoRegistro2.php"method="post">
   <tr>
      <td>
        Ingrese nuevamente su numero de registro
      </td>
       <td align="center">
      <input type="number" required name="num"><br>
      </td>
      </tr>
   <tr>
   <td>
     Ingrese su especialidad
	 </td>
	  <td align="center">
      <select name="Especialidad">
        <option>Carpinteria</option>
        <option>Jardineria</option>
        <option>Plomeria</option>
        <option>Construcción</option>
      </select>
   </td>
   </tr>
   <tr>
    <td>
      Primera necesidad que esta buscando
    </td>
     <td align="center">
       <select name="Necesidad">
         <option>Alimento</option>
         <option>Lugar para dormir</option>
         <option>Articulos de primera necesidad</option>
       </select>
    </td>
    </tr>
    <tr>
      <td>
        Segunda necesidad que esta buscando
      </td>
       <td align="center">
         <select name="Neces">
           <option>Alimento</option>
           <option>Lugar para dormir</option>
           <option>Articulos de primera necesidad</option>
         </select>
      </td>
      </tr>
    <tr>
      <td>
        Consulta nuestros <a href="Terminos.html" class="registro"> Terminos y condiciones</a>
      </td>
    </tr>
   </table>
   <br><input type="submit" value="Enviar"><br>
   <br>
    
   </form>
	  <button><a href="index.php">Regresar al Inicio</a></button>
   </div>
 
  </body>
</html>