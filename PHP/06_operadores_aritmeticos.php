<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores aritmeticos</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center">Operadores aritmeticos</h1>
				<hr>
				<?php 
					$x =2;
				?>
				<table class="table table-bordered table-striped table-hover table-success">
					<thead class="bg-info text-light text-center">
						<tr>
							<th>Operador</th>
							<th>Descripcion</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>
					</thead> 

					<tbody>
						<tr>
							<td class="text-center"> + </td>
							<td class="text-center"> Adicion </td>
							<td class="text-center"> x=2 ; x+2;</td>
							<td class="text-center"	><?php echo $x+2; ?></td>
						</tr>
						<tr>
							<td class="text-center"> - </td>
							<td class="text-center"> Substraccion </td>
							<td class="text-center"> x=2 ; 5-x;</td>
							<td class="text-center"	>
								<?php 
									$x=2;
									echo $x=5-$x;
								?>	
							</td>
						<tr>
							<td class="text-center"> * </td>
							<td class="text-center"> Producto </td>
							<td class="text-center"> x=4 ; x*5;</td>
							<td class="text-center"	>
								<?php 
									$x=4;
									echo $x*5;
								?>	
							</td>
						</tr>
						<tr>
							<td class="text-center"> / </td>
							<td class="text-center"> Division </td>
							<td class="text-center"> 15/5;</td>
							<td class="text-center"	>
								<?php 
									echo 15/5; ?>	
							</td>
						</tr>
						<tr>
							<td class="text-center"> % </td>
							<td class="text-center"> Residuo </td>
							<td class="text-center"> 5%2;</td>
							<td class="text-center"	>
								<?php 
									echo 5%2; ?>	
							</td>
						</tr>
						<tr>
							<td class="text-center"> ++ </td>
							<td class="text-center"> Incremento </td>
							<td class="text-center"> $x=5; $x++;</td>
							<td class="text-center"	>
								<?php 
									$x=5;
									echo $x++;
								?>	
							</td>
						</tr>
						<tr>
							<td class="text-center"> ++ </td>
							<td class="text-center"> Incremento </td>
							<td class="text-center"> $x=5; ++$x;</td>
							<td class="text-center"	>
								<?php 
									$x=5;
									echo ++$x;
								?>	
							</td>
						</tr>
						<tr>
							<td class="text-center"> -- </td>
							<td class="text-center"> Decremento </td>
							<td class="text-center"> $x=5; $x--;</td>
							<td class="text-center"	>
								<?php 
									$x=5;
									echo --$x;
								?>	
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>