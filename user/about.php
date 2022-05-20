<?php 
include "../backend/connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Morgant</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="icon" href="../img/logo.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar">
                <?php 
                    if(isset($_SESSION['status'])){ 
                    if($_SESSION['status'] == 'login'){ 
                    $id = $_SESSION['id'];
                    $query = mysqli_query($koneksi, "SELECT * FROM akun_user WHERE id = $id");
                    $data = mysqli_fetch_array($query);
                ?>
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-2" src="../img/profile_nologin.webp" alt="Image">
                    <h1 class="font-weight-bold"><?= $data['username']; ?></h1>
                    <p class="mb-4">Anda Berhasil Login, silahkan laporkan kejadian disekitar anda atau ubah data diri anda <a href="../user/detail_user.php"><b>disini</b></a></p>
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
                                <a href="about.php" class="nav-item nav-link active">About</a>
                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            <div class="container py-5 px-2 bg-primary">
                <div class="row py-5 px-4">
                    <h3 class="mb-6 mb-md-4 text-white text-uppercase font-weight-bold">Tentang Website Ini dan Fungsinya</h3>
                </div>
            </div>
            <div class="container bg-white pt-5">
                <div class="row px-3 pb-5">
                    <div class="col-md-12">
                        <h4 class="mb-4 font-weight-bold">Lihat ketersediaan ambulan dan laporkan kecelakaan</h4>
                        <img class="img-fluid float-left w-50 mr-4 mb-3" src="../img/logo.png" alt="Image">
                        <p class="m-0">Website ini bertujuan untuk membantu pelaporan pertolongan pertama pada korban kecelakaan atau masyarakat yang membutuhkan pihak kesehatan ke Rumah sakit, sehingga bisa mengurangi angka kematian.</p>

                        <p>“Bisa tidak ya kita punya akses untuk memesan ambulan rumah sakit dengan gampang ?”</p>
                        <p>“Bagaimana kalau kita bisa buat hidup jadi lebih mudah?”</p>

                        <p>Ya, semua berawal dari sebuah pertanyaan. Pertanyaan yang pada akhirnya menjadi awal bagi tim kelompok 4 untuk memulai projek ini dari sebuah matakuliah Teknik Komputer yang sulit di Banda Aceh pada tahun 2022</p>

                        <p>Hari ini, ide dari projek itu dikembangkan dalam bentuk aplikasi yang bernama Morgant dan akan menjadi aplikasi pesan ambulan dari rumah sakit terbesar di Asia tenggara yang akan menghubungkan user dengan pihak rumah sakit.  
                        Morgant ingin mengatasi masalah terbesar yang ada seperti ketimpangan akses saat menghubungi pihak rumah sakit.</p>

                        <p>Morgant ini bertujuan untuk membantu pelaporan pertolongan pertama pada korban kecelakaan atau masyarakat yang membutuhkan pihak kesehatan ke Rumah sakit, sehingga bisa mengurangi angka kematian.</p>
                        </p>
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