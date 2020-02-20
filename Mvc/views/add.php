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
      <div class="col-md-10 offset-1">
         <hr>
        <h1><i class="fa fa-plus"></i> Adicionar Usuario</h1>
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
             Adicionar Usuario
          </li>
        </ol>
    </nav>    
             <div class="row">
              <div class="col-xl-6 mb-4">
                <form action="./" method="post" enctype="multipart/form-data">
                  <div class="form-group">

                    <input type="hidden" name="method" value="store">
                    <label for="names">Nombre Completo: </label>
                    <input type="text" class="form-control" name="names" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="birthdate">Fecha Nacimiento:</label>
                    <input type="date" class="form-control" name="birthdate" placeholder="dd/mm/yy" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Correo Electronico:</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="photo">Foto: </label>
                    <input type="file" class="form-control-file" accept="image/*" name="photo" required>
                  </div>
                   <div class="form-group">
                    <label for="password">Contraseña: </label>
                    <input type="password" class="form-control" name="password" required>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success">
                      <i class="fa fa-save"></i>
                      Guardar
                    </button>
                      <button type="reset" class="btn btn-dark">
                      <i class="fa fa-eraser"></i>
                      Limpiar
                    </button>
                    
                  </div>
                </form>
              </div>       
            </div>
  
</body>
</html>