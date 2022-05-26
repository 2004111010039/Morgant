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
                    <p class="mb-4">Selamat datang admin, anda dapat merubah data rumah sakit anda</p>
                    <p><b><a href="upload_profile.php">Upload Profile</a></b></p>
                    <p><b><a href="update_rs.php">Update Data RS</a></b></p>
                    <p><b><a href="rubah_sandi.php">Rubah Sandi</a></b></p>
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
								<a href="#" class="nav-item nav-link active">Laporan Masuk</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="container p-0">
                    <?php 
                        $no = 1;
                        $nrs = $data['nama_rs'];
                        $nrs_new = str_replace(' ', '', $nrs);
                        $nrs_normal = strtolower($nrs_new);
                        $querylaporan = mysqli_query($koneksi, "SELECT * FROM $nrs_normal");
                     ?>
                	<div id="blog-carousel" class="carousel slide" data-ride="carousel">
                		<div class="container bg-white pt-4">
                            <div class="cdse">
                                <table>
                                    <tr>
                                        <td width="5%">No</td>
                                        <td width="20%">Nama Pelapor</td>
                                        <td width="60%">Laporan</td>
                                        <td>Konfirmasi</td>
                                        </tr>
                                        <?php while($laporan = mysqli_fetch_array($querylaporan)){ ?>
                                        <form action="../backend/delete_laporan.php" method="POST">
                                            <tr>
                                            <input type="hidden" name="nrs_normal" value="<?= $nrs_normal ?>">
                                            <input type="hidden" name="ids" value="<?= $ids ?>">
                                            <input type="hidden" name="idlap" value="<?= $laporan['id']; ?>">
                                            <td><?= $no++ ?></td>
                                            <td><?= $laporan['nama_pelapor'] ?></td>
                                            <td class="csdeleft"><?= $laporan['laporan']  ?> <a href="<?= $laporan['link'] ?>" target="blank"><?= $laporan['link']  ?></a></td> 
                                            <td><button class="btnss" onclick="return confirm('Laporan sudah selesai?')">
                                            <svg style="width:24px;height:24px" viewBox="0 0 23 23">
                                            <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M12 20C7.59 20 4 16.41 4 12S7.59 4 12 4 20 7.59 20 12 16.41 20 12 20M16.59 7.58L10 14.17L7.41 11.59L6 13L10 17L18 9L16.59 7.58Z" />
                                            </svg></button>
                                            </td>
                                        </form>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        <br><br></div>
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
