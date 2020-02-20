<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center">Filtros</h1>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<input type="number" class="form-control" name="age" placeholder="Ingresar la edad">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Ingresar el correo electronico">
					</div>
					<div class="form-group">
						<input type="url" class="form-control" name="url" placeholder="Ingresar el Direccion de Internet">
					</div>
					<div class="form-group">
						<input type="submit" value="Aplicar filtros" class="btn btn-success">
					</div>
				</form>
				<?php
					$entero = 123;
					if(!filter_var($entero, FILTER_VALIDATE_INT)) {
						echo "El número no es un Entero";
					}else {
						echo "El número es un Entero";
					}
				?>
				
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>