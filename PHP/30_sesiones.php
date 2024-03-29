<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center">Sesiones</h1>
				<hr>
				<div class="jumbotron">
					<?php 
						if ($_POST) {
							unset($_SESSION['visitas']);
							session_destroy();
						} 
					?>
					<?php if (isset($_SESSION['visitas'])):?> 
						<?php $_SESSION['visitas']++?>
						<?php else: ?>
							<?php $_SESSION['visitas'] = 1; ?>
				<?php endif ?>
				<p class="lead">
					<strong>
						Usted ha visitado esta pagina: 
					</strong>
					<?php echo $_SESSION['visitas'];?>
				</p>
				<form action="" method="POST">
					<input type="submit"  value="Cerrar Sesion" class="btn btn-danger" name="boton">
				</form>
				</div>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>