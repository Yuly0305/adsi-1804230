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
				<h1 class="h3 text-center text-info">Herencia</h1>
				<hr>
				<?php
					class Operacion {
						protected $n1;
						protected $n2;
						protected $resultado;


						public function __construct($n1, $n2){
							$this->n1 = $n1;
							$this->n2 = $n2;
						}



					/*public function imprimirResultado() {
						echo "<ul class='list-group  list-group-item-warning'>";
						echo "<li class='list-group-item text-center'>".$this->num1."+".$this->num2."</li>";
						echo "<li class='list-group-item text-center'>Resulado: ".$this->resultado."</li>";
						echo "</ul><br>";
					}*/
					
				}

					class Producto extends Operacion {

						public function calcular() {
						return $this->resultado ="La suma de ".$this->n1." y ".$this->n2."= ".($this->n1 + $this->n2);
					}
				}

				class Subtraction extends Operacion {

						public function calcular() {
						return $this->resultado ="La resta de ".$this->n1." y ".$this->n2."= ".($this->n1 - $this->n2);
					}
				}

				class Div extends Operacion {

						public function calcular() {
						return $this->resultado ="La Division entre ".$this->n1." y ".$this->n2."= ".($this->n1 / $this->n2);
					}
				}

				class Mult extends Operacion {

						public function calcular() {
						return $this->resultado ="La Multiplicacion de ".$this->n1." y ".$this->n2."= ".($this->n1 * $this->n2);
					}
				}

				class Pow extends Operacion {

						public function calcular() {
						return $this->resultado ="El Numero".$this->n1." Eleveado a la ".$this->n2."= ".pow($this->n1 , $this->n2);
					}
				}






					$res = new Producto(5, 7);
					echo "<div class='alert alert-info'>";
					/*$res = new Subtraction(5,7);*/
					echo $res->calcular();
					echo "</div>";
					/*$res->imprimirResultado();*/

					$res = new Subtraction(5, 7);
					echo "<div class='alert alert-info'>";
					/*$res = new Subtraction(5,7);*/
					echo $res->calcular();
					echo "</div>";
					/*$res->imprimirResultado();*/

					$res = new Div(5, 7);
					echo "<div class='alert alert-info'>";
					/*$res = new Subtraction(5,7);*/
					echo $res->calcular();
					echo "</div>";

					$res = new Mult(5, 7);
					echo "<div class='alert alert-info'>";
					/*$res = new Subtraction(5,7);*/
					echo $res->calcular();
					echo "</div>";	


					$res = new Pow (5, 7);
					echo "<div class='alert alert-info'>";
					/*$res = new Subtraction(5,7);*/
					echo $res->calcular();
					echo "</div>";	

				?>
			</div>
		</div>
	</div>

</body>
</html>