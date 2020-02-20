<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (Multidimensionales)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-center">Arreglos (Multidimensionales)</h1>
				<hr>
				<?php 
					$bicycles = array(
						'Santa Cruz' => array('Nomad', 'MegaTower', 'HighTomer'),
						'Intese'     => array('Carbine', 'Tracer', 'Spider'),
						'Specialized'     => array('Enduro', 'Stumjumper', 'Camber')
						);
					//var_dump($bicycles);
				 ?>
				
				<table class="table table-warning">
				 		<?php foreach ($bicycles as $brand => $value): ?>	
				 			<tr>
				 				<th class="bg-success text-light"><?php echo $brand; ?></th>
				 				<?php foreach ($value as $reference): ?>
				 					<td><?php echo $reference ?></td>
				 				<?php endforeach ?>
				 			</tr>
				 		<?php endforeach ?>
				</table>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>