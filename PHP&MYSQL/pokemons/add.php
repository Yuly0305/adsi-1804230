<?php include '../config/app.php';
	  include '../config/db.php';
 ?>
	<?php  include '../includes/header.php'; ?>
	<div class="col-md-6 offset-md-3">
		<h1 class="text-center text-muted">
			<i class="fa fa-plus fa-2x"></i>
		ADICIONAR POKEMON
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
    				<a href="<?php echo $url; ?>pokemons/">
    					<i class="fa fa-paw"></i>
    					MODULO POKEMONS
    				</a>
    			</li>
    			<li class="breadcrumb-item active" aria-current="page">
    				ADICIONAR POKEMON
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
				<label for="type">Tipo: </label>
				<input class="form-control" type="text" name="type" required>
			</div>
			<div class="form-group">
				<label for="strength">Fuerza: </label>
				<input class="form-control" type="range" name="strength" min="0" max="2000" step="5" oninput="ostrength.value=this.value" value="0" required>
				<output id="ostrength" class="badge badge-dark"></output>
			</div>
			<div class="form-group">
				<label for="stamina">Resistencia: </label>
				<input class="form-control" type="range" name="stamina" min="0" max="2000" step="5" oninput="ostamina.value=this.value" value="0" required>
				<output id="ostamina" class="badge badge-dark"></output>
			</div>
			<div class="form-group">
				<label for="speed">Velocidad: </label>
				<input class="form-control" type="range" name="speed" min="0" max="2000" step="5" oninput="ospeed.value=this.value" value="0" required>
				<output id="ospeed" class="badge badge-dark"></output>
			</div>
			<div class="form-group">
				<label for="accuracy">Curacion: </label>
				<input class="form-control" type="range" name="accuracy" min="0" max="2000" step="5" oninput="oaccuracy.value=this.value" value="0" required>
				<output id="oaccuracy" class="badge badge-dark"></output>
			</div>
			<div class="form-group">
				<?php 
					$sql = "SELECT * FROM trainers";
					$result= mysqli_query($con, $sql);
				 ?>
				<label for="trainers_id">ENTRENADOR: </label>
				<select class="form-control">
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

