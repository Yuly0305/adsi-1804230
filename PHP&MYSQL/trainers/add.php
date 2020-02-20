<?php include '../config/app.php';
	  include '../config/db.php';
 ?>
	<?php  include '../includes/header.php'; ?>
	<div class="col-md-6 offset-md-3">
		<h1 class="text-center text-muted">
			<i class="fa fa-plus fa-2x"></i>
		ADICIONAR ENTRENADOR
		</h1>
		<hr>
		<nav aria-label="breadcrumb">
  			<ol class="breadcrumb">
    			<li class="breadcrumb-item">
    				<a href="<?php echo $url; ?>">
    					<i class="fa fa-home"></i>
    					INICIO
    				</a>
    			</li>
    			<li class="breadcrumb-item">
    				<a href="<?php echo $url; ?>trainers/">
    					<i class="fa fa-dumbbell"></i>
    					MODULO ENTRENADORS
    				</a>
    			</li>
    			<li class="breadcrumb-item active" aria-current="page">
    				ADICIONAR ENTRENADOR
    			</li>
  			</ol>
		</nav>	 	
		<hr>
		<form action="" method="post">
			<div class="form-group">
				<label for="name">Nombre: </label>
				<input class="form-control" type="text" name="name" required>
			</div>
			<div class="form-group">
				<label for="type">Nivel: </label>
				<input class="form-control" type="number" name="level" required>
			</div>
			<div class="form-group">
				<?php 
					$sql = "SELECT * FROM gym";
					$result= mysqli_query($con, $sql);
				 ?>
				<label for="trainers_id">GIMNASIO: </label>
				<select name="gym_id" class="form-control">
					<?php while($row= mysqli_fetch_array($result)) {?>
						<option value="<?php echo $row['id'] ?>">
							<?php echo $row['name'] ?>
						</option>
						
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">
					<i class="fa fa-save"></i>
					Crear Pokemon
				</button>
				<button type="delete" class="btn btn-danger">
					<i class="fa fa-eraser"></i>
					Limpiar Formulario
				</button>
			</div>

		</form>
			<?php 
				if ($_POST) {
				 	$name         = mysqli_real_escape_string($con, $_POST['name']);
				 	$type         = mysqli_real_escape_string($con, $_POST['type']);
				 	$strength     = mysqli_real_escape_string($con, $_POST['strength']);
				 	$stamina      = mysqli_real_escape_string($con, $_POST['stamina']);
				 	$speed        = mysqli_real_escape_string($con, $_POST['speed']);
				 	$accuracy     = mysqli_real_escape_string($con, $_POST['accuracy']);
				 	$trainers_id  = mysqli_real_escape_string($con, $_POST['trainers_id']);

				 	$sql = "INSERT INTO pokemons VALUES(DEFAULT, '$name', '$type', $strength,
				 												 $stamina, $speed, $accuracy ,
				 												 $trainers_id)";
				 	if(mysqli_query($con, $sql)) {
				 		$_SESSION['message'] = "EL POKEMON " .$name ." FUE ADICIONADO CON EXITO !!!";
				 		echo "<script>window.location.replace('index.php')</script>";
				 	}
				 }
				
			 ?>
		</div>
		<?php include '../includes/footer.php'; ?>
	</div>

