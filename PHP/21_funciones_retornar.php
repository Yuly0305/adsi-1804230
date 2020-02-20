<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones (Retornar)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-center">Funciones (Retornar)</h1>
				<hr>
    			<?php 
					function show_name($name){
						return $name;
					}
					function show_result($n1, $n2){
						return $n1 * $n2;
					}
				?>
				<div class="jumbotron">
  					<div class="container">
  						<h1 class="display-4"><?php echo show_name('yuly'); ?></h1>
    					<p class="lead">23 * 15 = <?php echo show_result(23, 15); ?></p>
  					</div>
				</div>

			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>