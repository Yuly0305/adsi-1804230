<?php 
//Crear Cookie: 
setcookie('nombre', 'Yuly Rojas', time()+60);
//Eliminar cookie
//setcookie('nombre', 'Yuly Rojas', time()-60):
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center">Cookies</h1>
				<hr>
				<div class="jumbotron">
					<small>Ver Cookies: Ir a la consola/Application/Cookies</small>
					<!-- isset pregunta si vale algo -->
					<?php if (isset($_COOKIE['nombre'])): ?>
						<p class="lead">
							<strong>Nombre: </strong>
							<?php echo $_COOKIE['nombre'] ?>
						</p>
						<?php else: ?>
							<p class="lead">
								Bienvenido visitante
							</p>
						<?php endif ?>
				</div>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>