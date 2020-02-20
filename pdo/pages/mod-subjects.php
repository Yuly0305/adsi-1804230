<div id="wrapper">

    <?php include 'menu-teacher.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php if(isset($_SESSION['unames'])) echo $_SESSION['unames']; ?></span>
                <img class="img-profile rounded-circle" src="<?php if(isset($_SESSION['uphoto'])) echo $_SESSION['uphoto']; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Mi Perfil
                </a>
                 <a class="dropdown-item" href="mod-users.php">
                  <i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>
                  Módulo Aprendices
                </a>
                <a class="dropdown-item" href="mod-subjects.php">
                  <i class="fas fa-book fa-sm fa-fw mr-2 text-gray-400"></i>
                  Módulo Materias
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Módulo Calificaciones
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="close.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesión
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-book"></i> &nbsp; Módulo Materias</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-12 mb-4">
              <a class="btn btn-success" href="subjects/add.php">
                <i class="fa fa-plus"></i>
                Adicionar Materias
              </a>
              <hr>
                <?php $subjects = listSubjects($conn); ?>
                <table id="dataTable" class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre Materia</th>
                       <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($subjects as $subject): ?>
                      <tr>
                        <td><?php echo $subject['id']; ?></td>
                        <td><?php echo $subject['name']; ?></td>
                        <td>
                          <a class="btn btn-sm btn-info" href="subjects/edit.php?id=<?php echo $subject['id']; ?>"><i class="fa fa-edit"></i></a>

                          <a class="btn btn-sm btn-danger btn-delete" href="javascript:;" data-id="<?php echo $subject['id']; ?>" data-dir="subjects"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nombre Materia</th>
                       <th>Acciones</th>
                    </tr>
                  </tfoot>
                </table>
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

