<div id="wrapper">

    <?php include 'menu-teacher.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include 'navbar-teacher.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-pen"></i> &nbsp;Modificar Aprendiz</h1>
          </div>

          <!-- Content Row -->
          
            <div class="row">
              <div class="col-xl-6 mb-4">
                <?php if ($_GET):?>
                  <?php 
                   $id = $_GET['id'];
                   $student = showStudent($id, $conn);
                   ?>
                <form action="" method="post" enctype="multipart/form-data">
                  <?php foreach ($student as $st): ?>
                    <input type="hidden" name="id" value="<?php echo $st['id'] ?>">
                  <div class="form-group">
                    <label for="names">Nombre Completo: </label>
                    <input type="text" class="form-control" name="names" value="<?php echo $st['names'] ?>"required>
                  </div>
                  
                  <div class="form-group">
                    <label for="birthdate">Fecha Nacimiento:</label>
                    <input type="date" class="form-control" name="birthdate" placeholder="dd/mm/yy" value="<?php echo $st['birthdate'] ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="email">Correo Electronico:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $st['email'] ?>"required>
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
                <?php endforeach ?>
                </form>
              <?php endif ?>
                <?php 

                  if($_POST){
                    /*var_dump($_POST);
                    var_dump($_FILES);*/

                    $names     = $_POST['names'];
                    $birthdate = $_POST['birthdate'];
                    $email     = $_POST['email'];
                    $path      ="public/imgs/";

                    if(!empty($_FILES['photo']['name'])) {
                      $photo     = $path.time().".".pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['photo']['tmp_name'], '../'.$photo);
                    }else{
                        $photo = null;
                    }
                    
                    if (updateStudent($id, $names, $birthdate, $email, $photo, $conn)) {
                      $_SESSION['message'] = "El Estudianre $names se Modifico con Exito! ";
                      echo "<script>
                        setTimeout(function() {
                          window.location.replace('../mod-users.php');
                        }, 1200);
                        </script>";
                    }
                }
               ?>
              </div>       
            </div>
          </div>
        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Todos los Derechos Rreservados &copy; <?php echo date('Y') ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
   
  <!-- End of Page Wrapper -->

