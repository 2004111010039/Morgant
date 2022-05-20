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
                    $query = mysqli_query($koneksi, "SELECT * FROM akun_user WHERE id = $ids");
                    $data = mysqli_fetch_array($query);
                ?>
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                	<img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-2" src="../img/profile_nologin.webp" alt="Image">
                    <h1 class="font-weight-bold"><?= $data['username']; ?></h1>
                    <p class="mb-4">Silahkan isi dan ubah data anda atau <a href="../index.php"><b>kembali</b></a></p>
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
                                <a href="#" class="nav-item nav-link active">Ubah Data Rumah Sakit</a>
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
			                        <h2>Tambah/Ubah Data Anda</h2><br>
			                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="../backend/update_user.php" method="POST">
			                        	<input type="hidden" name="id" value="<?= $data['id'] ?>">
			                            <div class="control-group">
			                            	<label><b>Username :</b></label>
			                                <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" required="required"/>
			                                <p class="help-block text-danger"></p>
			                            </div>
			                            <div class="control-group">
			                            	<label><b>Tempat tanggal lahir :</b></label>
			                                <input type="text" class="form-control" name="ttl" value="<?= $data['ttl'] ?>" required="required"/>
			                                <p class="help-block text-danger"></p>
			                            </div>
			                            <div class="control-group">
			                            	<label><b>Alamat :</b></label>
			                                <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>" required="required"/>
			                                <p class="help-block text-danger"></p>
			                            </div>
			                            <div class="control-group">
			                            	<label><b>Jenis kelamin :</b></label>
			                                <input type="text" class="form-control" name="jenis_kelamin" value="<?= $data['jenis_kelamin'] ?>" required="required"/>
			                                <p class="help-block text-danger"></p>
			                            </div>
                                        <div class="control-group">
                                            <label><b>Kewarganegaraan :</b></label>
                                            <input type="text" class="form-control" name="kewarganegaraan" value="<?= $data['kewarganegaraan'] ?>" required="required"/>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="control-group">
                                            <label><b>No Telepon :</b></label>
                                            <input type="text" class="form-control" name="no_tlpn" value="<?= $data['no_tlpn'] ?>" required="required"/>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="control-group">
                                            <label><b>Email :</b></label>
                                            <input type="text" class="form-control" name="email" value="<?= $data['email'] ?>" required="required"/>
                                            <p class="help-block text-danger"></p>
                                        </div>
			                            <div>
			                                <button class="btn btn-primary" type="submit" id="sendMessageButton">Update Data</button>
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
