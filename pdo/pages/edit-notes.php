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
            <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-pen"></i> &nbsp;Modificar Nota</h1>
          </div>

          <!-- Content Row -->
          
            <div class="row">
              <div class="col-xl-6 mb-4">
                
                <form action="" method="post" enctype="multipart/form-data">
                  <?php $id = $_GET['id'] ?>
                  <?php $note = showNotes($id, $conn) ?>
                  <?php foreach ($note as $nt): ?>

                  <div class="form-group">
                     <label for="names">Nombre Estudiante:</label>
                     <select class="form-control" name="user_id">
                     <?php $students = listStudents($conn); ?>
                   <option value="">Seleccione...</option>
                    
                      <?php foreach ($students as $student): ?>
                      <option value="<?php echo $student['id']; ?>"<?php if($student['status'] == "Inactive") echo "disabled"; ?> <?php if($nt['user_id'] == $student['id']) echo "selected"; ?>><?php echo $student['names']; ?>
                      </option>
                    <?php endforeach ?>
                      </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="name">Materia:</label>
                     <select class="form-control" name="subject_id">
                     <?php $subjects = listSubjects($conn); ?>
                        <option value="">Seleccione...</option>
                      <?php foreach ($subjects as $subject): ?>
                      <option value="<?php echo $subject['id']; ?>" <?php if($nt['subject_id'] == $subject['id']) echo "selected"; ?>><?php echo $subject['name']; ?>
                      </option>
                    <?php endforeach ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="nt1">Nota 1: </label>
                    <input type="number" step="0.1" min="0" max="5" class="form-control" name="nt1"  value="<?php echo $nt['nt1']; ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="nt2">Nota 2: </label>
                    <input type="number" step="0.1" min="0" max="5" class="form-control" name="nt2" value="<?php echo $nt['nt2'] ?>"required>
                  </div>
                   <div class="form-group">
                    <label for="nt3">Nota 3: </label>
                    <input type="number" step="0.1" min="0" max="5" class="form-control" name="nt3" value="<?php echo $nt['nt3'] ?>"required>
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

                <?php 

                  if($_POST){
/*                  var_dump($_POST);
*/                  
                    $nt1        = $_POST['nt1'];
                    $nt2        = $_POST['nt2'];
                    $nt3        = $_POST['nt3']; 
                    $user_id    = $_POST['user_id'];
                    $subject_id = $_POST['subject_id'];
     

                  
                    if (updateNotes($id, $nt1, $nt2, $nt3,$user_id, $subject_id,  $conn)) {
                      $_SESSION['message'] = "Las notas del estudiante se Modificaron con Exito! ";
                      echo "<script>
                        setTimeout(function() {
                          window.location.replace('../mod-notes.php');
                        }, 2400);
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

