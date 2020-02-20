<?php include '../config/app.php';
	  include '../config/db.php';
 ?>
	<?php  include '../includes/header.php'; ?>
	<div class="col-md-8 offset-md-2">
		<h1 class="text-center text-muted">
			<i class="fa fa-paw fa-2x"></i>
		MODULOS POKEMONS
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
    			<li class="breadcrumb-item active" aria-current="page">
    				MODULOS POKEMONS
    			</li>
  			</ol>
		</nav>
		<?php 
		 	$sql=  "SELECT t.name AS name_trainers, p.*
					FROM trainers AS t, pokemons AS p 
					WHERE t.id = p.trainers_id ORDER BY p.id ASC" ; 

			$result = mysqli_query($con, $sql);
		?>
		<a href="add.php" class="btn btn-success">
			<i class="fa fa-plus"></i>
			ADICIONAR POKEMON
		</a>
		<hr>
		<table class="table table-hover table-striped table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>NOMBRE</th>
					<th>TIPO</th>
					<th>ENTRENADOR</th>
					<th class="text-center">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row= mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['type']; ?></td>
						<td><?php echo $row['name_trainers']; ?></td>
					<td>
					<a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-dark">
						<i class="fa fa-search"></i>
					</a>
					<a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-light">
						<i class="fa fa-pen"></i>
					</a>
					<a href="javascript:;" class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $row['id']; ?>">
						<i class="fa fa-trash"></i>
					</a>
				</tr>
			</td>
				<?php } ?>
			</tbody>
		</table>

		</div>
	<?php include '../includes/footer.php'; ?>

