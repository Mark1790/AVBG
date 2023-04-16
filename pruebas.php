<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu de Navegación</title>
        <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="base.css">
        <link rel="stylesheet" href="navbar.css">
        
        
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
                    <a href="#"><img src="logo.png" alt="TSEC CodeCell"></a>
                </div>
    
                <ul class="navbar-main-ul hide-burger-menu burger-menu-dropdown">
                    <a href="index.php"><li>Inicio</li></a>
                    <a href="trabajos.php"><li>Trabajos</li></a>
                    <a href="proyecto.php"><li>Sobre nosotros</li></a>
                    <a href="contactanos.php"><li>contactanos</li></a>
                    <a href="#"><li>Iniciar sesion</li></a>
                </ul>
            </div>
    
            <div class="right-side">
                <div class="account">
                    <img src="zaky.jpg" alt="HK">
                    
                    <div class="dropdown-caret"></div>
                </div>
                
                <div class="dropdown hide">
                    <div class="user-name">Bienvenido</div>
    
                    <ul>
                        <a href="#"><li>perfil</li></a>
                        
                        <a href="#"><li>cerrar sesion</li></a>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
    </head>
    
    <form name="contentForm" enctype="multipart/form-data" method="post" action="/contact-us/index.stml">
       
        <!-- <h4>CONTACT FORM</h4> -->
        <div class="contactForm">
           <div class="row">
              <div class="col-md-6">
                 <div class="form-group icon-1">
                    <label class="control-label sr-only" for="firstName">First Name</label> 
                    <input name="firstName" id="firstName" class="form-control" placeholder="FIRST NAME" type="text" value="">
                 </div>
                 <div class="form-group icon-1">
                    <label class="control-label sr-only" for="c_lastname">Last Name</label> 
                    <input name="lastname" id="c_lastname" class="form-control" placeholder="LAST NAME" type="text" value="">
                 </div>
                 <div class="form-group icon-2">
                    <label class="control-label sr-only" for="fromEmail">Email</label> 
                    <input name="fromEmail" id="fromEmail" class="form-control" placeholder="EMAIL" type="text" value="">
                 </div>
                 <div class="form-group icon-3">
                    <label class="control-label sr-only" for="phoneNumber">Phone Number</label> 
                    <input name="phoneNumber" id="phoneNumber" class="form-control" placeholder="PHONE" type="text" value="">
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label class="control-label sr-only" for="comments">Your Message</label> 
                    <textarea name="comments" rows="5" id="comments" class="form-control" placeholder="YOUR MESSAGE" cols="10"></textarea>
                 </div>
                 <input type="submit" value="SUBMIT" class="btn btn-primary btn-block">
              </div>
           </div>
           <!-- / row -->
        </div>
        <!-- / contactForm -->
     </form>
     <div class="rectangle">goli</div>
</body>
</html>