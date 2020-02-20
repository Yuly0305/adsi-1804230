<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fecha y Hora</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-6 offset-md-3 text-center">
				<h1 class="text-center">Fecha y Hora</h1>
				<hr>
					<div class="jumbotron">
						<p class="lead">
							<?php echo date('d-m-Y h:i:s') ?>
						</p>
						<p class="lead">
							<strong>Año</strong>
							<?php echo date('Y') ?>
						</p>
						<p class="lead">
							<strong>Dia de la semana</strong>
							<?php echo date('l') ?>
						</p>
						<p class="lead">
							<strong>Zona Horaria</strong>
							<?php echo date('e') ?>
						</p>
						<p class="lead">
							<strong>Tiempo UNIX</strong>
							<?php echo time() ?>
						</p>
					</div>
				
			</div>
		</section>	
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>