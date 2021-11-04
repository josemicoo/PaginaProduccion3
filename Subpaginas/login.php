<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>

<?php
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);

include("conexion.php");

$consulta = mysqli_query($conexion, "SELECT nombre, apellido, email FROM usuarios WHERE usuario='$usuario' AND password='$password'");

$resultado = mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
		echo "Hola ".$respuesta['nombre']." ".$respuesta['apellido']."<br />";
		echo "te damos el acceso al secreto de la vida.";
		echo "<a href='http://www.google.com'>El secreto</a>";	

} else {
	echo "No es un usuario registrado";
	include ("form_registro.php");
}


?>

</body>
</html>