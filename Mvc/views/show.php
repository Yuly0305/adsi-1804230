<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome!</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<hr>
				<h1><i class="fa fa-info"></i> Informacion de Usuario</h1>
				<hr>
				<nav aria-label="breadcrumb">
  			<ol class="breadcrumb">
    			<li class="breadcrumb-item">
    				<a href="index.php">
    					<i class="fa fa-home"></i>
    					INICIO
    				</a>
    			</li>
    			<li class="breadcrumb-item active" aria-current="page">
    				 Informacion de Usuario
    			</li>
  			</ol>
		</nav>	 	
	<table class="table tabla-striped table-hover table-sm">
		<thead>
			<?php 	
				while($row = mysqli_fetch_array($data)){
			?>
			<tr>
			 <td colspan="2" class="text-center">
                    <img class="rounded-circle img-thumbnail" src='<?php echo $row['photo']; ?>' style="width: 17rem; height: 17rem;">
                  </td> 	
             </tr>
			<tr>
				<th>Nombre Completo</th>
				<td><?php echo $row['names']?></td>
			</tr>
			<tr>
				<th>Fecha Nacimiento</th>
				<td><?php echo $row['birthdate']?></td>
			</tr>
			<tr>
				<th>Correo Electronico</th>
				<td><?php echo $row['email']?></td>
			</tr>
			<tr>
                  <th>Estado</th>
                  <td>
                    <?php if ($row['status'] == 'Active'):?>
                          <span class="btn btn-sm btn-success">
                            <i class="fa fa-check"></i> Activo
                          </span>
                        <?php else: ?>
                          <span class="btn btn-sm btn-danger ">
                            <i class="fa fa-times"></i> Inactivo
                          </span>
                        <?php endif ?> 
                  </td>
                </tr>
			<?php } ?>

		</thead>
	 </table>
				</div>
		</div>
	</div>
	
</body>
</html>