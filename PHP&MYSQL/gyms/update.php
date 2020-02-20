<?php include '../config/app.php';
	  include '../config/db.php';
 ?>
	<?php  include '../includes/header.php'; ?>
	<div class="col-md-6 offset-md-3">
		<h1 class="text-center text-muted">
			<i class="fa fa-pen fa-2x"></i>
		MODIFICAR GIMNACIOS
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
    				<a href="<?php echo $url; ?>gyms/">
    					<i class="fa fa-paw"></i>
    					MODULO GIMNACIOS
    				</a>
    			</li>
    			<li class="breadcrumb-item active" aria-current="page">
    				MODIFICAR GIMNACIOS
    			</li>
  			</ol>
		</nav>	 	
		<hr>
		<?php 
				if (isset($_GET['id'])) {
					$id     = $_GET['id'];
					$sql    = "SELECT * FROM gym WHERE id = $id";
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
				<button type="submit" class="btn btn-success">
					<i class="fa fa-save"></i>
					Modificar gimnasio
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
	
				 	$sql = "UPDATE gym SET name = '$name' 
				 								WHERE id = $id";
				 	if(mysqli_query($con, $sql)) {
				 		$_SESSION['message'] = "EL GIMNASIO " .$name ." FUE MODIFICADO CON EXITO !!!";
				 		echo "<script>window.location.replace('index.php')</script>";
				 	}else{
				 		echo "Error".mysqli_error($con);
				 	}
				 }
				
			 ?>
		</div>
		<?php include '../includes/footer.php'; ?>