<?php 
$nama_rumahsakit = $_GET['namarumahsakit'];
$nama_user = $_GET['nama_user'];
$idrs = $_GET['idrs'];
include "../backend/connect.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Morgant</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="icon" href="img/logo.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar">
                <?php 
                    if(isset($_SESSION['status'])){ 
                    if($_SESSION['status'] == 'login'){ 
                    $id = $_GET['idl'];
                    $query = mysqli_query($koneksi, "SELECT * FROM akun_user WHERE id = $id");
                    $data = mysqli_fetch_array($query);
                ?>
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-2" src="../img/profile_nologin.webp" alt="Image">
                    <h1 class="font-weight-bold"><?= $data['username']; ?></h1>
                    <p class="mb-4">Anda Berhasil Login, silahkan laporkan kejadian disekitar anda atau ubah data diri anda <a href="../css/blog.php"><b>disini</b></a></p>
                    <a href="../backend/logout.php" class="btn btn-lg btn-block btn-primary mt-auto">Logout</a>
                </div> 
                <?php }} else { ?>
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-2" src="../img/profile_nologin.webp" alt="Image">
                    <h1 class="font-weight-bold">Anonimous</h1>
                    <p class="mb-4">Login untuk melaporkan sesuatu dan melihat akun anda</p>
                    <a href="login.php" class="btn btn-lg btn-block btn-primary mt-auto">Login</a>
                </div>
                <?php } ?>
            </div>
            <div class="content">
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                        <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav m-auto">
                                <a href="../index.php" class="nav-item nav-link">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            <div class="container bg-white pt-5">
                    <div class="col-md-12 pb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <div class="container my-5">
                          <div class="row">
                            <div class="col-6">
                              <p>Klik Button untuk mengetahui koordinat dan copykan ke form laporan dibawah.</p>

                              <button class="btn btn-primary btn-block" onclick="getLocation()">Generate Lokasi</button>
                            </div>
                            <div class="col-6">
                              <p id="demo"></p>
                            </div>
                          </div>
                        </div>
                        <script>
                        var x = document.getElementById("demo");

                        function getLocation() {
                          if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(showPosition);
                          } else { 
                            x.innerHTML = "Browser mu tidak support.";
                          }
                        }

                        function showPosition(position) {
                          x.innerHTML = "Latitude: " + position.coords.latitude + 
                          "<br>Longitude: " + position.coords.longitude;
                        }
                        </script>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post" action="../backend/input_laporan.php">
                            <div class="atur">
                                <?php $nm_rumahsakit = str_replace(' ', '', $nama_rumahsakit);
                                $nm_rs_kecil = strtolower($nm_rumahsakit) ?>
                                <input type="hidden" name="idrs" value="<?= $idrs ?>">
                                <input type="hidden" name="nama_rumahsakit" value="<?= $nm_rs_kecil ?>">
                                <input type="hidden" name="nama_user" value="<?= $nama_user ?>">
                                <input type="text" name="laporan" value="Telah terjadi kecelakaan di titik (lan ..., long ...), mohon segera kirimkan ambulan">
                                <p>Note: Mohon izinkan/allow lokasi agar kami dapat menemukan lokasi</p>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit" id="sendMessageButton">Buat Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           <div class="container py-4 bg-secondary text-center">
                    <p class="m-0 text-white">
                        &copy; Project Rekayasa Perangkat Lunak 2022 
                    </p>
            </div>
        </div>
    </div>
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>
    <script src="../js/main.js"></script>
    </body>
</html>
