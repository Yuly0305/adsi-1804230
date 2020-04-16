<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
</head>
<body>
	<h1>Crear Usuario</h1>
	<hr>
	<a href="{{ url('users') }}">Ir a lista de Usuarios</a>
	<hr>

	<form action="{{ url('users') }}" method="post">@csrf

		<input type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
		<br>
		<input type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electronico">
		<br>
		
		<input type="text" name="phone" value="{{ old('phone') }}" placeholder="Teléfono">
		<br>
		<input type="date" name="birthdate" value="{{ old('birthdate') }}" placeholder="Fecha Nacimiento">
		<br>
		<input type="text" name="gender" value="{{ old('gender') }}" placeholder="Genero">
		<br>
		<input type="text" name="address" value="{{ old('address') }}" placeholder="Direccion">
		<br>
		<input type="pass" name="password" value="{{ old('address') }}" placeholder="Contaseña">
		<br>
		<button type="submit"> Guardar </button>
	</form>
</body>
</html>