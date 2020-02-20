<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (Indice Numerico)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-center">Arreglos (Indice Numerico)</h1>
				<hr>
				<?php 
					#Asignacion de indice automatico
					$cars = array('volkwagen', 'Bmw', 'Renault');
					#Asignacion de indice manual
					$cars[3] = 'Mazda';
					$cars[4] = 'Mercedes';
					$cars[5] = 'Renault';
				
					#var_dump($cars);
				
					 ?>
				<div class="btn-group">
					<?php foreach ($cars as $car): ?>
						<button type="button" class="btn btn-dark">
							<?php 	echo $car ?>
						</button>
					<?php endforeach ?>
			</div>
		</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>