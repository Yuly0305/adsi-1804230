<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (Asociativos)</title>
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
					$studends = array('trosky' => 16,
								  	  'luna' => 18, 
								  	  'Alaska' => 20);
					$studends['perrito lindo'] = 20;
					$studends['hermoso']       = 19;
				
					#var_dump($cars);
				
					 ?>
				<div class="btn-group-vertical">

					<?php foreach ($studends as $key => $value ): ?>
						<button type="button" class="btn btn-info">
							<?php echo $key; ?>
						<span class="badge badge-danger"><?php echo $value ?></span>
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