<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class='col-md-8'>
				<h1 class="text-center">Clase (Atributos)</h1>
				<hr>	
<?php 
	//Clase
	class VideoGame {
		//Atributos (Caracteristicas propias del juego)
		public $name;   //Nombre del VideoJuego
		public $plataform; //Plataforma - Consola
		public $price; //Precio venta
		public $year; // Año de Lanzamiento

		//Metodos
		//User::listar(): Metodo estatico
		public function setAttributes($name, $plataform, $price, $year){
			$this->name      = $name;
			$this->plataform = $plataform;
			$this->price     = $price;
			$this->year      = $year;
		} 

		public function getAttributes(){
			return $this->name." - ".
				   $this->plataform." - ".
				   $this->price." - ".
				   $this->year;
		}

	} 
	echo"<div class='table table-dark'>";
	$vg1 = new VideoGame; //Crear objeto (instanciar)
	$vg1->setAttributes('Splinter Cell' , 'Play Station 2' , 50, 2010);
	echo $vg1->getAttributes();
	echo"<hr>";
	$vg2 = new VideoGame; //Crear objeto (instanciar)
	$vg2->setAttributes('The Sims 4' , 'Play Station 4' , 20, 2018);
	echo "El nombre del video juego es: ".$vg2->name;
	echo"</div>";
?>
</div>
	 	</div>
	</div>

</body>
</html>

