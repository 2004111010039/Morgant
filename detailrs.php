<?php 
include "backend/connect.php";
$id = $_GET['id'];
session_start();
unset($_SESSION['stopclick']);
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
                    $datal = mysqli_fetch_array($query);
                ?>
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-2" src="img/profile_nologin.webp" alt="Image">
                    <h1 class="font-weight-bold"><?= $datal['username']; ?></h1>
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
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="user/about.php" class="nav-item nav-link">About</a>
                                <a href="user/contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            <div class="container py-5 px-2 bg-primary">
                <div class="row py-5 px-4">
                    <div class="text-md-left">
                        <h1 class="mb-9 mb-md-12 text-white text-uppercase font-weight-bold">Detail Rumah Sakit</h1>
                    </div>
                    
                </div>
            </div>
            <?php $query = mysqli_query($koneksi, "SELECT * FROM rumah_sakit WHERE id=$id");
             $data = mysqli_fetch_array($query)?>
            <div class="container py-5 px-2 bg-white">
                <div class="row px-4">
                    <div class="col-12">
                        <img class="ggg" src="img/rsimg/<?= $data['namaimg'] ?>" alt="Image">
                        <h2 class="mb-3 font-weight-bold"><?= $data['nama_rs'] ?>
                        <?php if($data['jumlah_ambulan'] >= 1){ ?>
                        <i class="ktambulan1">Tersedia <?= $data['jumlah_ambulan'] ?> ambulan</i></h2>
                        <?php } else { ?>
                        <i class="ktambulan0">Tersedia <?= $data['jumlah_ambulan'] ?> ambulan</i></h2>
                        <?php } ?>
                        <p><?= $data['profil_rs'] ?></p>
                        <h4 class="mb-3 font-weight-bold">Informasi</h4>
                        <p><?= $data['alamat'] ?></p>
                        <p><?= $data['no_tlpn_rs'] ?></p>
                        <a href="<?= $data['link_gmaps'] ?>" class="btn btn-sm btn-outline-primary mb-1 w-100">Buka <?= $data['nama_rs'] ?> Di Google Maps</a>
                        <?php 
                        $sqlambil = mysqli_query($koneksi, "SELECT * FROM rumah_sakit WHERE id=$id");
                        $dataambil = mysqli_fetch_array($sqlambil);
                        if(!isset($_SESSION['status'])) { ?>
                            <p class="btn btn-sm btn-outline-primary mb-1 w-100">Buat Laporan Kecelakaan</p>
                        <?php } else { 
                        if($dataambil['jumlah_ambulan'] < 1){?>
                            <p class="btn btn-sm btn-outline-primary mb-1 w-100">Buat Laporan Kecelakaan</p>
                            <center><div class="gagal-login">Tidak ada ambulan untuk di pesan!</div></center>
                        <?php } else { ?>
                            <a href="user/form_pelaporan.php?idl=<?= $datal['id'] ?>&namarumahsakit=<?= $data['nama_rs'] ?>&nama_user=<?= $datal['username'] ?>&idrs=<?= $id ?>" class="btn btn-sm btn-outline-primary mb-1 w-100">Buat Laporan Kecelakaan</a>
                        <?php }} ?>
                    </div>
                </div>
            </div>
            <div class="container py-4 bg-secondary text-center">
                <p class="m-0 text-white">&copy; Project Rekayasa Perangkat Lunak 2022</p>
            </div>
        </div>
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
