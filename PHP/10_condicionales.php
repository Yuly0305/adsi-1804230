<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional (if-else-elseif)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-center">Condicional (if-else-elseif)</h1>
				<hr>
				<?php $day = date('D'); ?>
				<?php if ($day == "Mon"): ?>
					<span class="badge badge-pill badge-warning">Hoy es Lunes</span>

				<?php elseif ($day == "Tue"): ?>
					<span class="badge badge-pill badge-warning">Hoy es Martes</span>

				<?php elseif ($day == "Wed"): ?>
					<span class="badge badge-pill badge-warning">Hoy es Miercoles</span>

				<?php elseif ($day == "Thu"): ?>
					<span class="badge badge-pill badge-warning">Hoy es Jueves</span>

				<?php elseif ($day == "Fri"): ?>
					<span class="badge badge-pill badge-warning">Hoy es Viernes</span>

				<?php else: ?>
					<span class="badge badge-pill badge-warning"> Feliz fin de semana</span>
				<?php endif ?>
				
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>