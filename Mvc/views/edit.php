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
        <h1><i class="fa fa-pencil"></i> Editar Usuario</h1>
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
             Editar Usuario
          </li>
        </ol>
    </nav>    

                <?php   
                while($row = mysqli_fetch_array($data)){
                ?>     
                <form action="./" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="method" value="update">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                  <div class="form-group">
                    <label for="names">Nombre Completo: </label>
                    <input type="text" class="form-control" name="names" value="<?php echo $row['names'] ?>"required>
                  </div>
                  
                  <div class="form-group">
                    <label for="birthdate">Fecha Nacimiento:</label>
                    <input type="date" class="form-control" name="birthdate" placeholder="dd/mm/yy" value="<?php echo $row['birthdate'] ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="email">Correo Electronico:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="photo">Foto: </label>
                    <input type="file" class="form-control-file" accept="image/*" name="photo">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success">
                      <i class="fa fa-save"></i>
                      Modificar
                    </button>
                      <button type="reset" class="btn btn-dark">
                      <i class="fa fa-eraser"></i>
                      Limpiar
                    </button>
                  </div>
                 
                </form>
              <?php } ?>
              </div>       
            </div>
  
</body>
</html>