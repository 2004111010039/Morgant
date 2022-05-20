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
                    $ids = $_SESSION['id'];
                    $query = mysqli_query($koneksi, "SELECT * FROM rumah_sakit WHERE id = $ids");
                    $data = mysqli_fetch_array($query);
                ?>
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                	<img class="sss" src="../img/rsimg/<?= $data['namaimg'] ?>" alt="Image"><br>
                    <h1 class="font-weight-bold"><?= $data['nama_rs']; ?></h1>
                    <p class="mb-4">Silahkan ubah data rumah sakit anda atau <a href="detail_admin.php"><b>kembali</b></a></p>
                    <a href="../backend/logout.php" class="btn btn-lg btn-block btn-primary mt-auto">Logout</a>
                </div> 
                <?php }} ?>
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
                                <a href="#" class="nav-item nav-link active">Ubah Sandi Rumah Sakit</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="container p-0">
                	<div id="blog-carousel" class="carousel slide" data-ride="carousel">
                		<div class="container bg-white pt-4">
							<div class="col-md-12 pb-5">
			                    <div class="contact-form">
			                        <div id="success"></div>
			                        <h2>Ubah Sandi</h2>
			                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="../backend/ubah_sandi.php" method="POST">
			                        	<input type="hidden" name="id" value="<?= $data['id'] ?>">
			                            <div class="control-group">
			                                <input type="password" class="form-control" name="sandi_lama" placeholder="Sandi Lama" required="required"/>
			                                <p class="help-block text-danger"></p>
			                            </div>
			                            <div class="control-group">
			                                <input type="password" class="form-control" name="sandi_baru" placeholder="Sandi Baru" required="required"/>
			                                <p class="help-block text-danger"></p>
			                            </div>
			                            <div class="control-group">
			                                <input type="password" class="form-control" name="sandi_baru_konfir" placeholder="Konfirmasi Sandi Baru" required="required"/>
			                                <p class="help-block text-danger"></p>
			                            </div>
                                        <div class="gagal-login">
                                        <?php if(isset($_GET['pesan'])){ 
                                            $pesan = $_GET['pesan']; ?>
                                        <i><?= $pesan ?></i>
                                        <?php } ?>
                                        </div>
			                            <div>
			                                <button class="btn btn-primary" type="submit" id="sendMessageButton">Ubah Sandi</button>
			                            </div>
			                        </form>
			                    </div>
			                </div>
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
