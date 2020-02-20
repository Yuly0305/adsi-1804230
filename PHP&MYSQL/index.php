<?php include 'config/app.php';
	  include 'config/db.php';
 ?>
	<?php  include 'includes/header.php'; ?>
	<div class="col-md-8 offset-md-2">
		<h1 class="text-center text-muted">PHP & MYSQL</h1>
		<hr>
		<div class="jumbotron text-center">
			<img src="<?php echo $imgs ?>logo1.png" width="400px">
			<br><br>
			<div class="btn-group-horizontal">
				<a class="btn btn-outline-primary" href="pokemons/" >
					<i class="fa fa-paw"></i> MODULO POKEMONS</a>
				<a class="btn btn-outline-primary" href="trainers/" >
					<i class="fas fa-dumbbell"></i> MODULO ENTRENADORES</a>
				<a class="btn btn-outline-primary" href="gyms/" >
					<i class="fas fa-building"></i> MODULO GIMNACIO</a>

			</div>
		</div>
	</div>

