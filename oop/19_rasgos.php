<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Rasgos(Caracteristicas)</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1 class="h3 text-center text-info">Rasgos(Caracteristicas)</h1>
				<hr>
				<?php
					trait hello{
						public function sayHello($name){
							echo "<li class='list-group-item'>Bienvenido: ".$name;
						}
					}
					trait Adsi{
						public function sayAdsi($code){
							echo " |PROGRAMA: ".$code;
						}
					}
					class Department{
						use Hello, Adsi;
						public function sayDepartment($dep){
							echo " |REGIONAL: ".$dep."</li>";
					}
				}

				$hll = new Department;
				$hll->sayHello('Yuly Rojas');
				$hll->sayAdsi('1804230');
				$hll->sayDepartment('Caldas');

				?>
			</div>
		</div>
	</div>

</body>
</html>