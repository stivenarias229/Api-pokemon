<?php 

$nombreBD = "usuario_pokemon";
$usuario = "root";
$contrase = "";

try {
	$basedatos = new PDO("mysql:host=localhost;dbname=$nombreBD", $usuario, $contrase);
	$basedatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
	echo "Ocurrió un error conectando a la base de datos: " . $e->getMessage();
}

?>