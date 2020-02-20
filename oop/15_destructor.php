<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Metoo Destructor</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1 class="h3 text-center">Metoo Destructor</h1>
				<hr>
				<ul class="list-group">
				<?php 
					abstract class DataBase{
					protected $host;
					protected $user;
					protected $pass;
					protected $dbnm;
					protected $conx;

					public function __construct($host = 'localhost', 
									   			$user='root',
									   			$pass='',
									  			$dbnm = 'adsi1804230'){

						$this->host = $host;
						$this->user = $user;
						$this->pass = $pass;
						$this->dbnm = $dbnm;
						$this->connect();

					}

					private function connect(){
						$this->conx = mysqli_connect($this->host,$this->user,$this->pass,$this->dbnm);

					if($this->conx) echo "<div class='alert alert-success'>Se ha conectado a la base de datos con exito. </div>";
					}
					public function __destruct(){
						mysqli_close($this->conx);
						echo '<div class="container">
								<div class="row">
								<div class="col-md-6 offset-md-3">';
						echo "<div class='alert alert-danger'>Se ha desconectado a la base de datos con exito";
						echo"</div></div></div></div>";
					}
				} 

				class User extends DataBase{ }

				$user = new User;

				?>
				</ul>
 			</div>
 		</div>
 	</div>
</body>
</html>