<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones (Parametros)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-center">Funciones (Parametros)</h1>
				<hr>
    			<?php 
					function show_info($name, $description){
						echo '<h1 class="display-4">'.$name.'</h1>';
						echo '<p class="lead">'.$description.'</p>';

					}
				?>
				<div class="jumbotron">
  					<div class="container">
    					<?php 
    						$desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quas nemo eum aspernatur officiis inventore fuga maxime consequuntur repellat. Quasi accusamus vel incidunt quas, recusandae quia culpa voluptatibus. Beatae, consequuntur.";
    					show_info('Radamel falcao', $desc); 
    					?>
  					</div>
				</div>

			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>