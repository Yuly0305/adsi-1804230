<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadenas</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center">Cadenas</h1>
				<hr>
				<?php 
					//Concatenar
					$tbl1 = 'table';
					$tbl2 = 'table-bordered';
					$tbl3 = 'table-hover table-dark';
					$class = $tbl1." ".$tbl2." ".$tbl3." table-stripped";
					//Cadenas
					$string1='adsi-1804230';
					$string2='centro de procesos';
					$string3='Hola Mundo';
				?>
				<table class="<?php echo $class; ?>">
					<thead class="bg-info text-light text-center">
						<tr>
							<th>Metodo</th>
							<th>Descripcion</th>
							<th>Cadena</th>
							<th>Resultado</th>
						</tr>
					</thead> 
					<tbody>
						<tr>
							<!-- strlen es como el .length -->
							<td>strlen()</td>
							<td>Longitud de la cadena</td>
							<td><?php echo $string1; ?></td>
							<td><?php echo strlen($string1); ?></td>
 						<tr>
							<!-- strpos Posicion Concidencia de la cadena -->
							<td>strpos()</td>
							<td>Posicion Concidencia cadena</td>
							<td><?php echo $string1; ?>- 1804230</td>
							<td><?php echo strpos($string1,'1804230'); ?></td>
						</tr>
						<tr>
							<!-- strtoupper convierte la cadena de texto en mayuscula -->
							<td>strtoupper()</td>
							<td>Cadena en mayuscula</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo strtoupper($string2); ?></td>
						</tr>
						<tr>
							<!-- ucwords convierte la primera letra de cada palabra Mayuscula  -->
							<td>ucwords()</td>
							<td>Convierte la primera letra de cada palabra Mayuscula</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo ucwords($string2); ?></td>
						</tr>
						<tr>
							<!-- strrev Invertir cadena  -->
							<td>strrev()</td>
							<td>Invierte la cadena</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo strrev($string2); ?></td>
						</tr>
						<tr>
							<!-- str_replace reemplaza cadena  -->
							<td>str_replace()</td>
							<td>Reemplaza la cadena</td>
							<td><?php echo $string3; ?></td>
							<td><?php echo str_replace("Mundo" ,"Yuly",$string3); ?></td>
						</tr>
						<tr>
							<!-- substr Substraer cadena  -->
							<td>substr()</td>
							<td>Substraer cadena </td>
							<td><?php echo $string3; ?></td>
							<td><?php echo substr($string3, 5, 9); ?></td>
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