<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hola mundo</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center"><?php print "Hola mundo"; ?></h1>
				<hr>
				<p class="text-justify text-muted">
					<?php  
						echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veniam dolor similique sint, reiciendis magni non dignissimos eos, a eaque exercitationem, suscipit consequatur inventore necessitatibus, temporibus delectus sequi. Natus, reprehenderit!"
					?>
				</p>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>