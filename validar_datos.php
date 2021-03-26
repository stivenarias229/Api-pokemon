<?php 

include_once "conexion.php";

$cuenta = $_POST['campo_cuenta_usuario'];
$password = $_POST['campo_password_usuario'];

$sentencia = $basedatos->prepare("SELECT codigo FROM usuario WHERE cuenta = ? AND password = ?;");
$sentencia->execute([$cuenta, $password]);


$fila = $sentencia->rowCount();
if($fila > 0){
	header("Location: pagina_principal.php");
}else{
	echo "Los datos estan incorrectos";
}

?>