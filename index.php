<?php
include "backend/connect.php"; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Morgant</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="icon" href="img/logo.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar">
                <?php 
                    if(isset($_SESSION['status'])){ 
                    if($_SESSION['status'] == 'login'){ 
                    $ids = $_SESSION['id'];
                    $query = mysqli_query($koneksi, "SELECT * FROM akun_user WHERE id = $ids");
                    $data = mysqli_fetch_array($query);
                ?>
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-2" src="img/profile_nologin.webp" alt="Image">
                    <h1 class="font-weight-bold"><?= $data['username']; ?></h1>
                    <p class="mb-4">Anda Berhasil Login, silahkan laporkan kejadian disekitar anda atau ubah data diri anda <a href="user/detail_user.php"><b>disini</b></a></p>
                    <a href="backend/logout.php" class="btn btn-lg btn-block btn-primary mt-auto">Logout</a>
                </div> 
                <?php }} else { ?>
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-2" src="img/profile_nologin.webp" alt="Image">
                    <h1 class="font-weight-bold">Anonimous</h1>
                    <p class="mb-4">Login untuk melaporkan sesuatu dan melihat akun anda</p>
                    <a href="user/login.php" class="btn btn-lg btn-block btn-primary mt-auto">Login</a>
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
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="user/about.php" class="nav-item nav-link">About</a>
                                <a href="user/contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="container p-0">
                    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="img/homers.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <h4 class="md-9 text-white font-weight-bold">Lihat rumah sakit terdekat Ketersediaan<br> ambulan dan tampilkan di maps</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container bg-white pt-5">
                <?php if(!isset($_SESSION['stopclick'])){?>
                    <div class="jarak ">
                        <form action="backend/setjarakrs.php" method="post">
                            <textarea name="lat" id="lat"></textarea>
                            <textarea name="lon" id="lon"></textarea>
                            <button id="clickbutton">Mencari jarak lokasi terdekat, mohon menunggu . . .</button>
                        </form>
                    </div>
                <?php } ?>
                        <?php 
                        $query = mysqli_query($koneksi, "SELECT * FROM rumah_sakit ORDER BY jarak ASC");
                        while ($data = mysqli_fetch_array($query)){

                        ?>
                        <a href="detailrs.php?id=<?= $data['id'] ?>"><div class="row blog-item px-3 pb-5">

                        <div class="col-md-5">
                            <img class="sss" src="img/rsimg/<?= $data['namaimg'] ?>" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold"><?= $data['nama_rs'] ?></h3>
                            <p><?= $data['alamat'] ?><br>
                            <?php if($data['jumlah_ambulan'] >= 1) { ?>
                                <i class="infoambulan1"><?= $data['jumlah_ambulan'] ?> ambulan Tersedia / <?= $data['jarak'] ?> KM</i> 
                            <?php } else { ?>
                                <i class="infoambulan0"><?= $data['jumlah_ambulan'] ?> ambulan Tersedia / <?= $data['jarak'] ?> KM</i> 
                            <?php } ?>
                            </p>
                        </div>
                        
                    </div></a><?php } ?>
                <div class="container py-4 bg-secondary text-center">
                    <p class="m-0 text-white">
                        &copy; Project Rekayasa Perangkat Lunak 2022 
                    </p>
                </div>
            </div>
        </div>
        <script>
            document.onload = getLocation();
            var x = document.getElementById("lat");
            var y = document.getElementById("lon");

            window.onload = function(){
                var button = document.getElementById('clickbutton').click();
            }

            function getLocation() {
              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
              } else { 
                x.innerHTML = "Browser mu tidak support.";
              }
            }

            function showPosition(position) {
              x.innerHTML =position.coords.latitude;
              y.innerHTML =position.coords.longitude;
            }
        </script>
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>
        <script src="js/main.js"></script>
         <?php unset($_SESSION['stopclick']); ?>
    </body>
</html>
