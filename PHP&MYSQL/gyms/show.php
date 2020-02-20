<?php include '../config/app.php';
	  include '../config/db.php';
 ?>
	<?php  include '../includes/header.php'; ?>
	<div class="col-md-6 offset-md-3">
		<h1 class="text-center text-muted">
			<i class="fa fa-search fa-2x"></i>
		CONSULTAR GIMNASIOS
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
    					<i class="fa fa-building"></i>
    					MODULO GIMNASIOS
    				</a>
    			</li>
    			<li class="breadcrumb-item active" aria-current="page">
    				CONSULTAR GIMNASIOS
    			</li>
  			</ol>
		</nav>	 	
		<hr>
		<table class="table table-hover table-bordered table-striped">
			<?php 
				if (isset($_GET['id'])) {
					$id     = $_GET['id'];
					$sql    = "SELECT * FROM gym WHERE id = $id";
					$result = mysqli_query($con, $sql);
					while ($row = mysqli_fetch_array($result)) {
					?>
					<tr>
						<th>ID:</th>
						<td><?php echo $row['id']; ?></td>
					</tr>
					<tr>
						<th>Nombre:</th>
						<td><?php echo $row['name']; ?></td>
					</tr>
				 <?php
					 } 
				} 
			?>
		</table>	
	</div>
		<?php include '../includes/footer.php'; ?>

