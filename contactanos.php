<?php
include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contactanos.css">
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="base.css">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="style2.css">
        
        <link rel="shortcut icon" href="logo.png" type="image/x-icon" sizes="any">

        <script defer src="account_dropdown.js"></script>
        <script defer src="burger_menu_dropdown.js"></script>

        <title>AVG Hogares</title>
    </head>

    <body>
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
                        <a href="#"><li>perfil</li></a>
                        
                        <a href="salir.php"><li>cerrar sesion</li></a>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
</head>
<body>


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="contact-us.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<br><br><br>
<!-- subpageBanner -->
<div class="container">
   <div class="row">
      <div class="col-sm-8 col-sm-push-4 col-md-7 col-md-push-5 col-lg-8 col-lg-push-4" id="mainContent">
         <ul class="breadcrumb">
            <li>
               
            </li>
            <li class="fileTrailCurrent active">Contactanos</li>
         </ul>
         <form name="contentForm" enctype="multipart/form-data" method="post" action="/contact-us/index.stml">
            <!-- <h4>CONTACT FORM</h4> -->
            <div class="contactForm">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group icon-1">
                        <label class="control-label sr-only" for="firstName">nombre</label> 
                        <input name="firstName" id="firstName" class="form-control" placeholder="Nombre" type="text" value="">
                     </div>
                     <div class="form-group icon-1">
                        <label class="control-label sr-only" for="c_lastname">apellido</label> 
                        <input name="lastname" id="c_lastname" class="form-control" placeholder="Apellido" type="text" value="">
                     </div>
                     <div class="form-group icon-2">
                        <label class="control-label sr-only" for="fromEmail">correo</label> 
                        <input name="fromEmail" id="fromEmail" class="form-control" placeholder="Correo" type="text" value="">
                     </div>
                     <div class="form-group icon-3">
                        <label class="control-label sr-only" for="phoneNumber">telefono</label> 
                        <input name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Telefono" type="text" value="">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label sr-only" for="comments">mensaje</label> 
                        <textarea name="comments" rows="5" id="comments" class="form-control" placeholder="Mensaje" cols="10"></textarea>
                     </div>
                     <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                  </div>
               </div>
               <!-- / row -->
            </div>
            <!-- / contactForm -->
         </form>
      </div>
      <!-- / #mainContent -->
      <div class="col-sm-4 col-sm-pull-8 col-md-5 col-md-pull-7 col-lg-4 col-lg-pull-8 pageSidebar" id="leftSideNav">
         <ul class="sidebar-widget list-group u-paddingTop30 text-uppercase">
           
            <li class="navHighlight list-group-item">
               <a href="/" data-module-object-id="3" data-id="12379" data-layout="basic" data-levels="1" style="color: white;">Contactanos</a>
            </li>
          
         </ul>
      </div>
      <!-- / #leftSideNav -->
   </div>
   <!-- / row -->
</div>
<!-- / container -->
<br><br><br>
</div>
<ul class="sidebar-widget list-group u-paddingTop30 text-uppercase">
           
   <li class="navHighlight list-group-item">
      <a href="/" data-module-object-id="3" data-id="12379" data-layout="basic" data-levels="1" style="color: white;">ubicacion</a>
   </li>
 
</ul>
<container id="mapa">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20837.470843117033!2d-116.98303080007032!3d32.535934320689414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d947c02a52fe0b%3A0xde8837c9322286e0!2sUniversidad%20Aut%C3%B3noma%20de%20Baja%20California!5e0!3m2!1ses-419!2smx!4v1678958702623!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</container>

    <br><br><br><br><br><br><b><br></b>
</body>
</html>