<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Tables</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="user.php">user</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
          
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
         
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
       <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        
              <li class="nav-item">
          <a class="nav-link" href="penerbit.php">
            <i class="fas fa-fw fa-home"></i>
            <span>penerbit</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="penulis.php">
            <i class="fas fa-fw fa-edit"></i>
            <span>penulis</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="petugas.php">
            <i class="fas fa-fw fa-th"></i>
            <span>petugas</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="peminjam.php">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>peminjam</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buku.php">
            <i class="fas fa-fw fa-book"></i>
            <span>buku</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php">
            <i class="fas fa-fw fa-user"></i>
            <span>user</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="transaksi.php">
            <i class="fas fa-fw fa-home"></i>
            <span>transaksi</span></a>
        </li>
      </ul>
        
        



      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
           
            <li class="breadcrumb-item active">Tables</li>
          </ol>

<div class=" card mb-3">
            <div class="card-body">
              <div class="table-responsive">

                <td width="500">
                  <form method="post" action="prosesuser.php" enctype="multipart/form-data">
                   
                     <div class="from-group">
                      <label for="usr">terdaftar pada :</label>
                      <input type="date" class="form-control" name="terdafrtar_pada"></label>
                    </div>
                     <div class="from-group">
                      <label for="usr">password :</label>
                      <input type="password" class="form-control" name="password" required=""></label>
                  </div>
                    <label for="usr">nama :</label>
                      <input type="text" class="form-control" name="nama" required=""></label>
                  </div>
                      <div class="from-group">
                      <label for="usr">terakhir_login :</label>
                      <input type="date" class="form-control" name="terakhir_login"></label>
                  </div>
                      <div class="from-group">
                      <label for="usr">alamat :</label>
                      <input type="text" class="form-control" name="alamat"></label>
                  </div>
                  <div class="from-group">
                      <label for="usr">jenis kelamin :</label>
                      <input type="radio" name="jens_kelamin" value="L">Laki-laki
                      <input type="radio" name="jens_kelamin" value="P">Perempuan<br>
                <br>
                 </div>
                 <div class="from-group">
                      <form method="post" action="proses_penulis.php">
                        <label class="col-md-12">foto :</label>
                        <div class="col-md-12">
                          <div class="form-group">
                          <input type="file" name="file_foto" class="form-control form-control-line" accept="image/*">
                        </div>
                 <button class="btn btn-info" type="submit">Simpan</button>
                </form></td>
              </div>
            </div>
          </div>

          

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © vika 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
