<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Sobreescritura de Constructor</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1 class="h3 text-center text-info">Sobreescritura de Constructor</h1>
				<hr>
				<?php
				class Vehicle {
				  protected $brand;
				  protected $refer;
				  protected $color;

				  public function __construct($brand, $refer){
				  	$this->brand=$brand;
				  	$this->refer=$refer;
				  }
				}


				class Auto extends Vehicle{

					public function __construct($brand, $refer,$color){
						parent::__construct($brand,$refer);
						$this->color = $color;
				}

				public function getVehicle()
				  {
				   echo "<li class='list-group-item'><strong>Marca: </strong>".$this->brand."</li>";
				   echo "<li class='list-group-item'><strong>Referencia: </strong>".$this->refer."</li>";
				    echo "<li class='list-group-item'><strong>Color: </strong>".$this->color."</li><br>";
				  }
				} 
				 

				$vh = new Auto('Mazda' , 'Cx - 5', 'Rojo');
				$vh->getVehicle();

				$vh = new Auto('Mercedez Benz' , 'G-Class', 'Gris');
				$vh->getVehicle();
				?>
			</div>
		</div>
	</div>

</body>
</html>