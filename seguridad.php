<body>
<?php
session_start();

if(!isset($_SESSION["autenticado"])){
	header("Location: login.php");
	exit();
}
?>
</body>