<?php 
	//Configuracion Base de Datos
	$host = "localhost";
	$user = "root";
	$pass = "";
	$ndb   = "adsi1804230";

	//Conexion Base de Datos
	$con = mysqli_connect($host, $user, $pass, $ndb);
	if (mysqli_connect_errno()) {
		echo "<span class='alert alert-danger'>Error: ".mysqli_connect_error()."</span>";
	}