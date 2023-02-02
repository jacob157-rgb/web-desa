<?php 
include "config.php";
error_reporting(0);

$urut = 1;
$cari = $_POST['input'];
    if ($cari != '') {
    $datas = mysqli_query($conn, "SELECT * FROM berita 
    WHERE 
    judul LIKE '%".$cari."%'
    ");
    } else {
    $datas = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
    }

?>

<?php
include 'config.php';

    if ( isset($_POST["submit"])) {
        $direktori = "assets/";
        $gambar = $_FILES['NamaFile']['name'];
        move_uploaded_file($_FILES['NamaFile']['tmp_name'], $direktori.$gambar);
        $paragraf1 = htmlspecialchars($_POST['paragraf1']);
        $paragraf2 = htmlspecialchars($_POST['paragraf2']);
        $paragraf3 = htmlspecialchars($_POST['paragraf3']);
        $informasi = htmlspecialchars($_POST['informasi']);
        $tanggal = htmlspecialchars($_POST['tanggal']);
        $penulis = htmlspecialchars($_POST['penulis']);
        
        
        $query = "INSERT INTO berita VALUES ('', '$gambar', '$paragraf1','$paragraf2', '$paragraf3', '$informasi','$tanggal', '$penulis')";
        if (mysqli_query($conn, $query)) {
            echo "<div class='alert alert-success text-center'> berita berhasil diuplod !! </div>";
            header("refresh: 2");
            
        } else {
            echo "<div class='alert alert-danger'> berita gagal diuplod !! </div>" .mysqli_error($conn);
            header("refresh: 2");
        }
        mysqli_close($conn);
        
        
    }
    ?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>berita</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" style="background: ;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dasboard">
                <div class="sidebar-brand-icon">
                <img src="assets/logo.png" alt="" width="30px">
                </div>
                <div class="sidebar-brand-text mx-3">Gembong<sup>Dadi</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dasboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                informasi / berita
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="berita">
                <i class="fas fa-fw fa-cog"></i>
                    <span>berita</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="surat">
                <i class="fas fa-fw fa-cog"></i>
                    <span>surat</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

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

                        

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                            <!-- Dropdown - Messages -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                    
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header">
                            MEMBUAT BERITA TERKINI
                            </div>
                            </form>
                            <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            <input type="file" name="NamaFile" placeholder="" class="form-control"> 
                                </div>
                                <div class="form-group">
                                <label for="paragraf1">JUDUL BERITA</label>
                                <input type="text" name="paragraf1" placeholder="Masukkan judul" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="paragraf2">PARAGRAF KE 1</label>
                                <input type="text" name="paragraf2" placeholder="Masukkan paragraf 1" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="paragraf3">PARAGRAF KE 2</label>
                                <input type="text" name="paragraf3" placeholder="Masukkan paragraf 2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label name="informasi" for="exampleFormControlTextarea1" class="form-label">INFORMASI TAMBAHAN</label>
                                    <textarea name="informasi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <label name="tanggal" for="tanggal">TANGGAL UPLOD</label>
                                <input type="date" name="tanggal" placeholder="Masukkan tanggal berita diuplod" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="penulis">PENULIS:  </label>
                                <input type="text" name="penulis" placeholder="siapa yang menulis artikel ini" class="form-control">
                                </div>
                                <input type="submit" name="submit" class="btn btn-success"></input>
                                <button type="reset" class="btn btn-warning">RESET</button>

                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                <!-- Begin Page Content -->
                <div class="container">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> berita terbaru</h1>
                    </div>

                <?php 
                while($data = mysqli_fetch_array($datas)) {

                
                ?>
                    <div class="card mb-3">
                        <img src="assets\<?=$data['gambar']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-title text-center"><?= $data['paragraf1'] ?></h1> <br>
                            <p class="card-text">  &emsp; <?= $data['paragraf2'] ?></p> <br>
                            <span class="card-text">  &emsp; <?= $data['paragraf3'] ?></span> <br>
                            <span class="card-text"> &emsp; <?= $data['informasi'] ?></span> 
                            <br>
                            <br>
                            <p class="card-text"><small class="text-muted">Diupdate <?= $data['tanggal'] ?>  &emsp;  ditulis oleh : <?= $data['penulis'] ?> </small></p>
                            <div class="row">
                            <div class="m-2"><a href="hapus?id=<?= $data ["id"]?>"><button class="btn btn-danger">hapus</button></a></div>
                            </div>
                        </div>
                    </div>

                <?php }?>






        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">yaqin ingin Logout ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">anda akan diarahkan kehalaman home page !!.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">batal</button>
                    <a class="btn btn-primary" href="/home/home">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>