<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Colaboracion</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1 class="h3 text-center text-info">Colaboracion</h1>
				<hr>
				<ul class="list-group text-center">
					
				
				<?php 

				class Evole {
					public function evolvePokemon($curr, $evol){
						echo "<li class='list-group-item list-group-item-success'>";
						echo $curr." --> ".$evol;
						echo "</li>";
					}
				}

				class Pokemon{
					private $current;
					private $evol;
					private $colla;

					public function __construct($curr, $evol){
						$this->curr = $curr;
						$this->evol = $evol;

						//Colaboracion
						$this->colla= new Evole;
					}
					public function nextLevel(){
						$this->colla->evolvePokemon($this->curr,$this->evol);
					}

				}

				$pk1 = new Pokemon('Pichu', 'Pikachu');
				$pk1->nextLevel();

				$pk2 = new Pokemon('Charmander', 'Charmilio');
				$pk2->nextLevel();


				$pk3 = new Pokemon('Squatle', 'Watotle');
				$pk3->nextLevel();

				$pk4 = new Pokemon('Watotle', 'Blastoise');
				$pk4->nextLevel();

				$pk5 = new Pokemon('Bulbasaur', 'Ivysaur');
				$pk5->nextLevel();

				$pk6 = new Pokemon('Ivysaur', 'Venusaur');
				$pk6->nextLevel();

				?>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>