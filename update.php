<?php
session_start();
include 'config.php';
if(!isset($_SESSION['id_user'])){
  header('location: login.php');
}else{
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM video_training WHERE id_video = '$id'");
$shw = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Video Uploader - Edit</title>

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

      <a class="navbar-brand mr-1" href="index.html">Video Uploader</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      </div>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
       </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>

          <?php
          if(@$_SESSION['stats'] == 'suc'){ ?>
          <div class="alert alert-success">
            <strong>Success!</strong> Indicates a successful or positive action.
          </div> <?php } if(@$_SESSION['stats'] == 'err'){ ?>
          <div class="alert alert-danger">
            <strong>Success!</strong> Indicates a successful or positive action.
          </div>
        <?php } ?>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-upload"></i> Edit Video</div>
            <div class="card-body">
              <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <form action="prosesupdate.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" class="form-control" id="nama" name="idvideo" value="<?php echo $shw['id_video'];
?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><b>Nama Video :</b></label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $shw['nama_video'];
?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile"><b>File input :</b></label><br>
                  <input type="file" name="fileupdate" id="exampleInputFile">
              </div>
               <div class="form-group">
          <label for="sel1"><b>Status Aktif :</b></label>
            <select class="form-control" name="status">
              <option>Active</option>
              <option>Inactive</option>
            </select>
				</div> 
          </div>
        </div>
      </div>
            </div>
<<<<<<< HEAD
            <div class="card-footer small" align="right">
=======
            <div class="card-footer small" align="left">
>>>>>>> 48d6367c980c99adbc44c61abcb9f5865700523e
                <button type="submit" class="btn btn-primary btn-sm" name="tapi_upload"><i class="fas fa-upload"></i> Edit</button> <a href="index.php"><div class="btn btn-secondary btn-sm"><i class="fas fa-window-close"></i> Cancle</div></a>
              </div>
              </form>
          </div>
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2019</span>
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
    <div class="modal fade bd-example-modal-lg" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih Tombol "Logout" bila anda ingin mengakhiri sesi ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="logout.php">Logout</a>
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
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <?php } ?>