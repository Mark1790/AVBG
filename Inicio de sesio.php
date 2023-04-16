<?php
$server = "localhost";
$usuario = "root";
$pass ="";
$bd = "avgb";
$conexion = new mysqli($server, $usuario, $pass, $bd);

if($conexion->connect_errno){
    die("error" .$conexion->connect_errno);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
    <title>Registro de Sesión</title>
    <link rel="stylesheet" href="Css.css">
</head>
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
    <header>
        <img src="imagenes/Logo.png" width="80" lang="500">
        <nav class="navigation">
       
        </nav>
    </header>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Inicio  de Sesion</h2>
            <form action="ProyectoInicio.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="Correo">
                    <label>Correo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="Contraseña">
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Recordarme</label>
                    <a href="#">Restablecer contraseña</a>
                </div>
                <button  type="submit" class="btn">Iniciar Sesion</button>
                <div class="login-registro">
                </div> 
            </form>

           
        </div>
</div>
 </body>