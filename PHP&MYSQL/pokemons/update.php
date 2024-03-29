<?php include '../config/app.php';
	  include '../config/db.php';
 ?>
	<?php  include '../includes/header.php'; ?>
	<div class="col-md-6 offset-md-3">
		<h1 class="text-center text-muted">
			<i class="fa fa-pen fa-2x"></i>
		MODIFICAR POKEMON
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
    				MODIFICAR POKEMON
    			</li>
  			</ol>
		</nav>	 	
		<hr>
		<?php 
				if (isset($_GET['id'])) {
					$id     = $_GET['id'];
					$sql    = "SELECT * FROM pokemons WHERE id = $id";
					$result = mysqli_query($con, $sql);
					while ($row = mysqli_fetch_array($result)) {
					?>
		<form action="" method="post">
			<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $row['id']?>">
				<label for="name">Nombre: </label>
				<input class="form-control" type="text" name="name" value="<?php echo $row['name'] ?>" required>
			</div>
			<div class="form-group">
				<label for="type">Tipo: </label>
				<input class="form-control" type="text" name="type" value="<?php echo $row['type'] ?>" required>
			</div>
			<div class="form-group">
				<label for="strength">Fuerza: </label>
				<input class="form-control" type="range" name="strength" value="<?php echo $row['strength'] ?>" min="0" max="2000" step="5" oninput="ostrength.value=this.value" value="0" required>
				<output id="ostrength" class="badge badge-dark"></output>
			</div>
			<div class="form-group">
				<label for="stamina">Resistencia: </label>
				<input class="form-control" type="range" name="stamina" value="<?php echo $row['stamina'] ?>" min="0" max="2000" step="5" oninput="ostamina.value=this.value" value="0" required>
				<output id="ostamina" class="badge badge-dark"></output>
			</div>
			<div class="form-group">
				<label for="speed">Velocidad: </label>
				<input class="form-control" type="range" name="speed" value="<?php echo $row['speed'] ?>"min="0" max="2000" step="5" oninput="ospeed.value=this.value" value="0" required>
				<output id="ospeed" class="badge badge-dark"></output>
			</div>
			<div class="form-group">
				<label for="accuracy">Presicion: </label>
				<input class="form-control" type="range" name="accuracy" value="<?php echo $row['accuracy'] ?>" min="0" max="2000" step="5" oninput="oaccuracy.value=this.value" value="0" required>
				<output id="oaccuracy" class="badge badge-dark"></output>
			</div>
			<div class="form-group">
				<?php 
					$sql = "SELECT * FROM trainers";
					$result= mysqli_query($con, $sql);
				 ?>
				<label for="trainers_id">ENTRENADOR: </label>
				<select name="trainers_id" class="form-control">
					<?php while($rowt= mysqli_fetch_array($result)) {?>
						<option value="<?php echo $rowt['id'] ?>" <?php if($rowt['id'] == $row['trainers_id']): ?> selected <?php endif ?>>
							<?php echo $rowt['name'] ?>
						</option>
						
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">
					<i class="fa fa-save"></i>
					Modificar Pokemon
				</button>
				<button type="delete" class="btn btn-danger">
					<i class="fa fa-eraser"></i>
					Limpiar Formulario
				</button>
			</div>

		</form>
			<?php 
				}	
			}
				if ($_POST) {
					$id           = mysqli_real_escape_string($con, $_POST['id']);
				 	$name         = mysqli_real_escape_string($con, $_POST['name']);
				 	$type         = mysqli_real_escape_string($con, $_POST['type']);
				 	$strength     = mysqli_real_escape_string($con, $_POST['strength']);
				 	$stamina      = mysqli_real_escape_string($con, $_POST['stamina']);
				 	$speed        = mysqli_real_escape_string($con, $_POST['speed']);
				 	$accuracy     = mysqli_real_escape_string($con, $_POST['accuracy']);
				 	$trainers_id  = mysqli_real_escape_string($con, $_POST['trainers_id']);

				 	$sql = "UPDATE pokemons SET name = '$name', 
				 								type ='$type', 
				 								strength= $strength,
				 								stamina= $stamina, 
				 								speed= $speed, 
				 								accuracy= $accuracy ,
				 								trainers_id= $trainers_id
				 								WHERE id = $id";
				 	if(mysqli_query($con, $sql)) {
				 		$_SESSION['message'] = "EL POKEMON " .$name ." FUE MODIFICADO CON EXITO !!!";
				 		echo "<script>window.location.replace('index.php')</script>";
				 	}
				 }
				
			 ?>
		</div>
		<?php include '../includes/footer.php'; ?>
	</div>

