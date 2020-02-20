<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Patrametros (Objeto/Obligatorio/Opcional)</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1 class="h3 text-center text-info">Colaboracion</h1>
				<hr>
				<?php 

				class country{
					public $name;
					public function __construct($name){
						$this->name = $name;
					}
				}

				class FifaWordCup{
					private $country;
					private $year;
					private $winner;

					public function __construct($country, $year, $winner= 'Brasil'){
						$this->country = $country;
						$this->year = $year;
						$this->winner = $winner;

					}
					public function showEvent(){
						echo "<ul class='list-group'>";
						echo "<li class='list-group-item'>Pais: ".$this->country->name."</li>";
						echo "<li class='list-group-item'>Año: ".$this->year."</li>";
						echo "<li class='list-group-item'>Gnas".$this->winner."</li>";
						echo "</ul><br>";
					}
				}

				$cn = new Country('USA');
				$fwc = new FifaWordCup($cn, 1994, 'Alemania');
				$fwc->showEvent();

				$cn = new Country('ITALIA');
				$fwc = new FifaWordCup($cn, 1990);
				$fwc->showEvent();


				?>
			</div>
		</div>
	</div>

</body>
</html>