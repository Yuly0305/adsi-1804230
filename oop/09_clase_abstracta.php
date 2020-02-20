<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Clase Abstracta</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1 class="h3 text-center text-info">Clase Abstracta</h1>
				<table class="table table-striped ">
							
				<tr>
					<th>Nombre</th>
					<th>Fecha Nacimiento</th>
					<th>Email</th>
					<th>Rol</th>
				</tr>
				<hr>
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
					}
					protected function disconnect(){
						mysqli_close($this->conx);
					}
				} 

				class User extends DataBase{

					private $res;

					public function listStudent(){
						
						$this->res = mysqli_query($this->conx,"SELECT * FROM users");
						while($row = mysqli_fetch_array($this->res)){
							echo"<tr>";
							echo"<td>".$row['names']."</td>";
							echo"<td>".$row['birthdate']."</td>";
							echo"<td>".$row['email']."</td>";
							echo"<td>".$row['role']."</td>";
							echo"</tr>";
						}
						parent::disconnect();
					}
						
					
				}

				$user = new User();
				$user->listStudent();

			?>
			</table>
			</div>
		</div>
	</div>

</body>
</html>