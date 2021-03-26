<?php 

$pokemon_selec = $_GET['num'];
$nombre = $_GET['nombre'];

$url = "https://pokeapi.co/api/v2/pokemon/".$pokemon_selec."/";
$json = file_get_contents($url);
$datos = json_decode($json, true);

$nombres = array();
$habilidad = array();


for($i=0; $i<=1; $i++){
	$habilidad[$i] = $datos["abilities"][$i]["ability"]["name"];
}

$imagen = $datos["sprites"]["front_default"];

//var_dump($habilidad);
//echo '<img src="'.$imagen.'" style="width: 30%; height: 270px">';

?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos2.css">
    <title>Mascotas</title>
</head>
<body class="row">

    <header class="container-fluid bg-dark text-white py-3 mb-3">
      <div class="d-flex justify-content-center">
          <h1>Caracteristicas del pokemon <?php echo $nombre; ?></h1>
      </div>
    </header>
  	<!-- Definición del menú -->
    <div class="col-lg-6 d-flex justify-content-center">
    	<img src="<?php echo $imagen; ?>" style="width: 60%; height: 270px">
    </div>


    <div class="col-lg-5">
    	<h2 id="titulo">habilidades:</h2>
    	<?php 
  			
    		for($i=0; $i<2; $i++){ 
    			echo '<p class="p-l-3">-'.$habilidad[$i].'</p>';
    		}

    	?>

      <button class="btn boton btn-danger"><a class="text-white" href="pagina_principal.php">Regresar</a></button>
    </div>

        <!-- scrip -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>