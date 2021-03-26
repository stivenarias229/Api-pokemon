<?php

include_once "conexion.php";

$nombre = $_POST['campo_nombre'];
$apellido = $_POST['campo_apellidos'];
$cuenta = $_POST['campo_cuenta'];
$password = $_POST['campo_password'];

$sentencia = $basedatos->prepare("INSERT INTO usuario(nombre, apellidos, cuenta, password) VALUES(?,?,?,?);");

$resultado = $sentencia->execute([$nombre, $apellido, $cuenta, $password]);

if($resultado === true){
	header("Location: index.html");
}else{
	echo "Ocurrió un error conectando a la base de datos: " . $e->getMessage();
}

?>