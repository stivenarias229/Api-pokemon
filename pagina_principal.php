<?php 


$url = "https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1118";
$json = file_get_contents($url);
$datos = json_decode($json, true);

$nombres = array();

for($i=0; $i<=1117; $i++){
	$nombres[$i] = $datos["results"][$i]["name"];
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pokemon Api</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body class="container">

	<h1>Pagina principal de los pokemons</h1>

	<div class="row">
		<?php 
			for($i=0; $i<=1117; $i++){
				$cont = $i + 1;

				echo '<div class="text-center contenedores">
						<a href="mostrar_habilidades.php?num='.$cont.'&nombre='.$nombres[$i].'">
							<p class="display-6 nombre_pokemon">'.$nombres[$i].'</p>
						</a>
					  </div>';
			}
		?> 
		
		
	</div>
</body>
</html>
