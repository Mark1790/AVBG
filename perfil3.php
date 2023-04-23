<?php
$conexion = mysqli_connect("localhost", "root", "", "AVGB") or die ("Problemas con la conexion");

include "seguridad.php";
 ?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navegación</title>
    <head>
        
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two&family=Playfair+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="perfil.css">    
<link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="navbar.css">
    
    
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" sizes="any">

    <script defer src="account_dropdown.js"></script>
    <script defer src="burger_menu_dropdown.js"></script>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de usuario</title>
  <nav class="navbar">
        <div class="left-side">
            <div class="burger-menu">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>

            <div class="logo">
                <a href="index.php"><img src="logo.png" alt="TSEC CodeCell"></a>
            </div>

            <ul class="navbar-main-ul hide-burger-menu burger-menu-dropdown">
                <a href="index.php"><li>Inicio</li></a>
                <a href="trabajos.php"><li>Trabajos</li></a>
                <a href="proyecto.php"><li>Sobre nosotros</li></a>
                <a href="contactanos.php"><li>contactanos</li></a>
                
            </ul>
        </div>

        <div class="right-side">
            <div class="account">
            <img src="perfil/<?php echo $_SESSION['imagen']; ?>">
                
                <div class="dropdown-caret"></div>
            </div>
            
            <div class="dropdown hide">
                <div class="user-name">Bienvenido</div>

                <ul>
                    <a href="perfil.html"><li>perfil</li></a>
                    
                    <a href="salir.php"><li>cerrar sesion</li></a>
                </ul>
            </div>
        </div>
    </nav>
</head>
<body>
  <div class="container">
    <img class="profile-image" src="lady.png" alt="Imagen de perfil">
    <div class="profile-data">
      <h1>Nombre de usuario</h1>
      <p>Correo electrónico: usuario@example.com</p>
      <p>Teléfono: 1234567890</p>
      <p>Fecha de nacimiento: 01/01/2000</p>
    </div>
    <br><br><br><br><br>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>